@extends('layout.body')
    @section('content')
    @include('layout.nav-bar')


    <section class="home form-crud">
        <div class="open-overlay">
          <span class="bar-top"></span>
          <span class="bar-middle"></span>
          <span class="bar-bottom"></span>
        </div>

        <form action="" method="POST">
            @csrf
        <div class="form__group field">
            <input
              type="input"
              class="form__field"
              placeholder="Nama"
              name="nama"
              id="nama"
              required
            />
            <label for="nama" class="form__label">Nama</label>
          </div>

          <div class="form__group field">
            <input
              type="input"
              class="form__field"
              placeholder="Size"
              name="size"
              id="size"
              required
            />
            <label for="size" class="form__label">Size</label>
          </div>

          <div class="form__group field">
            <input
              type="input"
              class="form__field"
              placeholder="Fungsi"
              name="fungsi"
              id="fungsi"
              required
            />
            <label for="fungsi" class="form__label">Fungsi</label>
          </div>

          <div class="form__group field">
            <input
              type="number"
              class="form__field"
              placeholder="Harga"
              name="harga"
              id="harga"
              required
            />
            <label for="harga" class="form__label">Harga</label>
        </div>
        <button class="offset" type="submit">Submit</button>
        </form>

      </section>

        @endsection

