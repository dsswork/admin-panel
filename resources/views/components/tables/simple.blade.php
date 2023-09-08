<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>

    <div class="card-body p-0">
        <form id="sortForm{{ str($title)->slug() }}">
            <table class="table table-striped">
                <thead>
                <tr>
                    @foreach($labels as $label)
                        <th>{{ $label }}</th>
                    @endforeach
                    <th>Edit</th>
                    @isset($off)
                    <th>Show</th>
                    @endisset
                    @if(!isset($noSort))
                    <th>Sort</th>
                    @endif
                </tr>
                </thead>
                <tbody class="sortable-group{{ str($title)->slug() }}">
                @foreach($models as $model)
                    <tr>
                        @foreach($fields as $field)
                            <td>
                                {{ $model->{ $field } }}</td>
                        @endforeach
                        <td class="p-1">
                            <x-buttons.edit :$model/>
                        </td>
                        @isset($off)
                            <td>
                                <x-buttons.on-off :$model />
                            </td>
                        @endisset
                        @if(!isset($noSort))
                        <td>
                            <input type="text" name="sort[]" value="{{ $model->id }}" hidden>
                            <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                            </span>
                        </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>

@if(!isset($noSort))
<script>
    $(function () {
        $(".sortable-group{{ str($title)->slug() }}").sortable({
            handle: '.handle', update: function () {
                let array = $("#sortForm{{ str($title)->slug() }}").serializeArray()
                let model = '{{ class_basename($model ?? '') }}'
                let index_array = {sort: [], model}
                $.map(array, function (n) {
                    index_array.sort.push(n['value']);
                });

                fetch('{{ route('admin.sort') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(index_array)
                });
            }
        });
    });
</script>
@endif
