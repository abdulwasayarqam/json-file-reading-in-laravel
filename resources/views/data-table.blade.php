<!-- resources/views/data-table.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Shortages Deduction Report</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid mt-5">
        <h2 class="mb-4">Vendor Shortages Deduction Report</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">PO Number</th>
                        <th scope="col">Allowance Ordered</th>
                        <th scope="col">Allowance Received</th>
                        <th scope="col">Prod Frt Ordered</th>
                        <th scope="col">Prod Frt Received</th>
                        <th scope="col">Total Lost</th>
                        <th scope="col">Total Units Ordered</th>
                        <th scope="col">Total Units Received</th>
                        <th scope="col">Total Units Shorted</th>
                        <th scope="col">Total Weight Ordered</th>
                        <th scope="col">Total Weight Received</th>
                        <th scope="col">Total Weight Shorted</th>
                        <th scope="col">Warehouse</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jsonData as $item)
                        @php
                            $data = $item['data'];
                            $fields = [
                                'PO Number' => 'Po number',
                                'Allowance Ordered' => 'Allowance Oedered',
                                'Allowance Received' => 'Allowance Received',
                                'Prod Frt Ordered' => 'Prod Frt Ordered',
                                'Prod Frt Received' => 'Prod Frt Received',
                                'Total Lost' => 'Total Lost',
                                'Total Units Ordered' => 'Total Units Ordered',
                                'Total Units Received' => 'Total Units Received',
                                'Total Units Shorted' => 'Total Units Shorted',
                                'Total Weight Ordered' => 'Total Weight Ordered',
                                'Total Weight Received' => 'Total Weight Received',
                                'Total Weight Shorted' => 'Total Weight Shorted',
                                'Warehouse' => 'Warehouse',
                            ];
                            // Split comma-separated values into arrays
                            $rowCount = count(explode(',', $data['Po number']));
                        @endphp
                        @for($i = 0; $i < $rowCount; $i++)
                            <tr>

                                @foreach($fields as $key => $field)
                                    @php
                                        $values = explode(',', $data[$field] ?? '');
                                    @endphp
                                    <td>{{ $values[$i] ?? '' }}</td>
                                @endforeach
                            </tr>
                        @endfor
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
