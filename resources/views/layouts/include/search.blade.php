<style>


.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 2px solid #f15a24;
  border-right: none;
  padding: 5px;
  height: 24px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #be5b37;
  background-color: transparent;
  font-family: Raleway;
  font-weight: bold;
  text-transform: uppercase;
}


.searchButton {
  width: 40px;
  height: 38px;
  border: 1px solid #f15a24;
  background: #f15a24;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

</style>
<form action="{{route('search')}}" method="post">
    {{ csrf_field() }} {{ method_field('POST') }}
    <div class="search">
        <input type="text" name="term" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>
