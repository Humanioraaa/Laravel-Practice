<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Table View</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link rel="stylesheet" href="asset/style.css" />
  </head>
  <body>
    <div class="overlay-navigation">
      <nav role="navigation">
        <ul>
          <li>
            <a
              href="#"
              data-content="Nothing Here, Just Credit For The Artist For Making Beautiful 3D Render"
              >Home</a
            >
          </li>
          <li><a href="#" data-content="Ready?">Table</a></li>
          <li><a href="#" data-content="Not Available Atm :(">Upcoming</a></li>
          <li><a href="#" data-content="Not Available Atm :(">Upcoming</a></li>
          <li><a href="#" data-content="Not Available Atm :(">Upcoming</a></li>
        </ul>
      </nav>
    </div>

    <section class="home hero">
      <div class="open-overlay">
        <span class="bar-top"></span>
        <span class="bar-middle"></span>
        <span class="bar-bottom"></span>
      </div>

      <div class="table-sec">
        <h1>Favourite Thing</h1>
        <table class="container">
          <thead>
            <tr>
                <th>Name</th>
                <th>Function</th>
                <th>Price</th>
                <th>Size</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $show)
            <tr>
                <td>{{ $show->nama }}</td>
                <td>{{ $show->fungsi }}</td>
                <td>{{ $show->harga }}</td>
                <td>{{ $show->size }}</td>
                <td><a href="">Test</a></td>
                <td><a href="">Test</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"></script>
    <script src="asset/script.js"></script>
  </body>
</html>
