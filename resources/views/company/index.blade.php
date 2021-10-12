<h1> Company Information </h1>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Description</th>

    </tr>

    @foreach ($companies as $company )

        <tr>
            <td>{{ $company->id }}</td>
            <td><a href="{{route('company.show', [$company])}}">{{ $company->name }}</a></td>
            <td>{{ $company->type }}</td>
            <td>{{ $company->description }}</td>

            <td><a href="{{route('company.edit', [$company])}}">Edit</a>
            {{-- atskiria, kuri klienta redaguoti, pagal id --}}

                {{-- DELETUI SUKURIAME FORMA --}}
                <form method="POST" action="{{route('company.destroy', [$company]) }}">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>

    @endforeach


</table>
