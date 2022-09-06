@extends('layouts.main')





@section('container')
<!-- Story Section Start -->
    <section id="story" class="">
      
        
          <div class="flex w-full items-center justify-center flex-wrap">


            <div class="w-full self-center order-2 py-4 lg:w-1/2">
                <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-md space-y-8">
                      <div>                        
                        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Masukan Nama, No. Whatsapp, dan Email Anda untuk mendownload Ebook Gratis</h2>                        
                      </div>
                      <form action="/register" method="POST">
                        @csrf
                        <div class="form-floating mt-4 ">
                            <label for="name" >Nama</label>
                            <input type="text" name="name" class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama" value="{{ old('name') }}" required>                            
                                @error('name')
                                    <div class="text-red-500 mb-4">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div class="form-floating mt-4">
                            <label for="email" class="mt-4">Email</label>
                            <input type="email" name="email" class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>                            
                                @error('email')
                                    <div class="text-red-500 mb-4">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div class="form-floating mt-4">
                            <label for="phone" class="mt-4">No. Whatsapp</label>
                            <input type="text" name="phone"  class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('phone') is-invalid @enderror" id="phone" placeholder="Masukan No. Whatsapp" value="{{ old('phone') }}" required>                            
                                @error('phone')
                                    <div class="text-red-500 mb-4">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div>
                          <button type="submit" class=" mt-4 group relative flex w-full justify-center rounded border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Kirim
                          </button>
                        </div>
                      </form>
                      <small class="text-center block">Kami tidak akan pernah membagikan, menyewakan, atau menjual informasi Anda</a></small>
                    </div>
                </div>
            </div>

            
            <div class="w-full flex justify-center item-center lg:w-1/2 order-1 mb-8 ">             
                <div class="bg-cover h-[350px] w-[350px] md:h-[450px] md:w-[450px] rounded-xl md:pb-12" style="background-image: url(img/1.png)">
                </div>          
            </div>  

          </div>

      
    </section>
    <!-- Story Section End -->
    @endsection

