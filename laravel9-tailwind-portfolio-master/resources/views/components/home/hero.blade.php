<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-5/12 px-4">
        <div class="hero-content">
          <h1
            class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
          ><br>
            Perkenalkan Nama <br/>
            Saya<span class="rounded-md text-amber-600"> Hikmal</span>.
          </h1>
          <p class="text-base mb-8 max-w-[520px]">
            Saya adalah mahasiswa semester 3 di Politeknik Negeri Sambas, jurusan Manajemen Informatika. <br/>
            Saat ini, saya seorang pengembang junior yang tengah mendalami framework Laravel.
            <a
              class="text-primary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-primary"
              href="https://youtu.be/5XZMvB_TCIw?si=4So486fQKUkv3wbn" target="_blank">YouTube Channel</a>. <br>
          </p>
          <ul class="flex flex-wrap items-center">
            <li>
              <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                  <table>Tentang Saya</table>
              </x-button-link>
            </li>
          </ul>
          <div class="clients pt-16">
            <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
            Ikuti saya di media sosial
              <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
            </h6>
            <x-social-icons></x-social-icons>
          </div>
        </div>
      </div>
      <div class="hidden lg:block lg:w-1/12 px-4"></div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="lg:text-right lg:ml-auto">
          <div class="relative inline-block z-10 pt-11 lg:pt-0">
            <img
              src="{{ url('/img/IMG_20230306_104438.jpg') }}"
              alt="hero"
              class="max-w-full lg:ml-auto"
            />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
              <svg
                width="80"
                height="80"
                viewBox="0 0 80 80"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"/>
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Hero Section End -->
