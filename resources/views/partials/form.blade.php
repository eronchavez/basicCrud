 
      
        <input type="text" name="title" placeholder="TITLE">
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror

      
        <input type="text" name="author" placeholder="AUTHOR">
        @error('author')
            <div style="color: red;">{{ $message }}</div>
        @enderror

     
        <input type="text" name="published_year" placeholder="YEAR">
        @error('published_year')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <br><br>