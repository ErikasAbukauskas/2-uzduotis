<form method="POST" action="{{route('client.store')}}">
    Name: <input type="text" name="client_name">
    Surname: <input type="text" name="client_surname">
    Username: <input type="text" name="client_username">
    Company_ID: <input type="number" name="client_company_id">
    Image_URL: <input type="url" name="client_image_url">
    @csrf
    <button type="submit"> Add </button>
</form>
