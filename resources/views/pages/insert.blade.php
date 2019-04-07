<form action="{{URL::to('/data-added')}}" method="post">
	@csrf
	
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="phone" placeholder="Phone">
	<input type="text" name="description" placeholder="Description">
	<input type="submit" name="submit" value="submit">

</form>