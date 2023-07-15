<div class="container mx-auto p-4">
    <h3 class="text-center">Search Your Algorithm</h3><br />
    <div class="border border-gray-300 rounded p-4">
        <div class="bg-gray-200 px-4 py-2">Search Data</div>
        <div class="p-4">
            <div class="mb-4">
                <input type="text" name="search" id="search" class="border border-gray-300 rounded p-2 w-full"
                    placeholder="Search Customer Data" />
            </div>
            <div class="table-responsive">
                <h3 class="text-center">Total Data: <span id="total_records"></span></h3>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">Algorithm Category</th>
                            <th class="border border-gray-300 px-4 py-2">Name</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        fetch_customer_data();

        function fetch_customer_data(query = '') {
            $.ajax({
                url: "{{ route('user.algorithmsearch') }}",
                method: 'GET',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function(data) {
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup', '#search', function() {
            var query = $(this).val();
            fetch_customer_data(query);
        });
    });
</script>
