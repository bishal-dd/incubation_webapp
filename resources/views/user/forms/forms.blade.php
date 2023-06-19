@include('user.includes.head')
@include('user.includes.navbar')

<style>
    /* Add custom CSS styles here */
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 100px auto; /* Adds space around the table */
        background-color: #e6e6e6;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f6f6f6; 
        color: black; /* Light gray background for table header cells */
    }

    td:nth-child(3) {
        text-align: center; /* Aligns the button to the center */
    }

    td:nth-child(3) a.btn {
        background-color: #e14135; /* Light blue background for action button */
        border-radius: 4px;
        padding: 10px 20px; /* Increase padding to adjust button size */
        font-size: 16px; /* Increase font size to adjust button size */
        text-decoration: none;
        color: white;
    }
</style>

<div class="row">
    <div class="col">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>File name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $datas)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$datas->name}}</td>
                    <td><a  href="/documents/{{$datas->file}}" class="btn" download>Download</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('user.includes.js')
