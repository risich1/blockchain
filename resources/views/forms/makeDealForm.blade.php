<div id="create" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/makeDeal" method="post">
            <div class="modal-header">
                <h5 class="modal-title">Создать проект</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                    <input type="hidden" name="curr_user" id="curr_user" value="{{ $curr_user->id }}">
                    <input type="hidden" name="customer_id" value="{{ $curr_user->id }}">

                    @if(count($users) > 0)
                    <input type="hidden" name="worker_id" value="{{ $users[0]->id }}">
                    @else
                    <input type="hidden" name="worker_id" value="">
                    @endif
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <div class="form-group">
                        <label class="label" style="display: block;">Кто вы</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="deal_type" id="deal_type1" value="customer" checked>
                            <label class="form-check-label" for="deal_type1">
                                Заказчик
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="deal_type" id="deal_type2" value="worker">
                            <label class="form-check-label" for="deal_type2">
                                Исполнитель
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label">Название</label>
                        <input type="text" name="name"  placeholder="Предмет сделки" class="form-control">
                    </div>
                    <div class="form-group" style="display: none;">
                        <label class="label">Заказчик</label>


                        <select class="form-control" id="customer_id">

                            @if($users)

                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach

                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="label">Исполнитель</label>
                        <select class="form-control" id="worker_id">

                            @if($users)

                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach

                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="label">Сроки(в днях)</label>
                        <input type="text" name="days" class="form-control" value="1" placeholder="Сроки в днях">
                    </div>

                    <div class="form-group">
                        <label class="label">Сумма(ETH)</label>
                        <input type="number" name="sum" placeholder="Сумма" class="form-control">
                    </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Создать</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
            </div>
            </form>
        </div>
    </div>
</div>


@section('scripts')
    <script>
        $(document).ready(function(){

            let customer_id = $('#customer_id');
            let customer_id_block = customer_id.closest('.form-group');



            $('input[name="deal_type"]').click(function(e){
                setStateType(e.target.value);
            });



            function setState(select, input)
            {
                $(select).click(function (e) {
                    $(input).val(e.target.value);
                });
            }

            setState('#customer_id' , 'input[name=customer_id]');
            setState('#worker_id' , 'input[name=worker_id]');

            function setStateType($value)
            {

                let curr_user = $('#curr_user').val();

                let sel_worker = $('#worker_id');
                let worker_id = $('input[name=worker_id]');
                let worker_id_block = sel_worker.closest('.form-group');

                let sel_customer = $('#customer_id');
                let customer_id = $('input[name=customer_id]');
                let customer_id_block = sel_customer.closest('.form-group');

                switch ($value) {
                    case 'worker':
                        worker_id.val(curr_user);
                        worker_id_block.hide();

                        customer_id.val(sel_customer.find('option:first-child').val());
                        customer_id_block.show();
                        break;
                    case 'customer':
                        customer_id.val(curr_user);
                        customer_id_block.hide();

                        worker_id.val(sel_worker.find('option:first-child').val());
                        worker_id_block.show();
                        break;

                }
            }
        });
    </script>
@endsection
