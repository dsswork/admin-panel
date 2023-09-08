<div class="sortable-group">
    @foreach($blocks ?? [] as $block)
        <x-fields.list :$block :$langId :first="$first ?? null"
                       :noDelete="$noDelete ?? null" :general="$general ?? null"/>
    @endforeach
</div>
<script>
    $(function () {
        $(".sortable-group").sortable({
            handle: '.handle', update: function () {
                let array = $("#sortForm").serializeArray()
                let model = '{{ class_basename($block ?? '') }}'
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
