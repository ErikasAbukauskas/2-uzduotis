<form method="POST" action="{{route('client.update', [$client])}}">
    Name: <input type="text" name="client_name" value="{{$client->name}}">
    Surname: <input type="text" name="client_surname" value="{{$client->surname}}">
    Username: <input type="text" name="client_username" value="{{$client->username}}">
    Company_ID: <input type="number" name="client_company_id" value="{{$client->company_id}}">
    Image_URL: <input type="url" name="client_image_url" value="{{$client->image_url}}">
    @csrf
    <button type="submit"> Edit </button>
</form>
