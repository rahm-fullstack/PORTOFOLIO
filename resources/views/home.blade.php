<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Abdurrahim Portopolio</title>
    <meta name="description" content="Portfolio one page modern dan minimalis: Home, Work, Contact, Profile." />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font for clean minimal look -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Icons (Font Awesome) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
      :root {
        --primary: #ffffff;
        --accent: #468A9A;
        cursor: none;
      }
      html {
        scroll-behavior: smooth;
      }
      body {
        font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
        background: var(--primary);
        color: #0f172a;
      }
      /* Subtle section reveal animation */
      .reveal {
        opacity: 0;
        transform: translateY(16px);
        transition: opacity .6s ease, transform .6s ease;
      }
      .reveal.visible {
        opacity: 1;
        transform: translateY(0);
      }
      /* Image container fallback styling */
      .image-shell {
        background-image: radial-gradient(1200px 800px at 10% 10%, rgba(70,138,154,0.08), transparent 60%);
        background-color: #f8fafc;
      }
      /* Active nav underline */
      .nav-link {
        position: relative;
      }
      .nav-link.active::after,
      .nav-link:hover::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -8px;
        height: 2px;
        background: var(--accent);
        border-radius: 999px;
      }
      /* Glass effect */
      .glass {
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(8px);
      }
    </style>
  </head>

  <body class="min-h-screen">
    <!-- Header / Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50">
      <div class="mx-auto max-w-7xl px-4">
        <div class="mt-4 rounded-2xl glass border border-slate-200 shadow-sm">
          <div class="flex items-center justify-between px-4 py-3">


            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8 font-medium">
              <a href="#home" class="nav-link text-slate-700 hover:text-slate-900">Home</a>
              <a href="#work" class="nav-link text-slate-700 hover:text-slate-900">Work</a>
              <a href="#profile" class="nav-link text-slate-700 hover:text-slate-900">Profile</a>
              <a href="#contact" class="nav-link text-slate-700 hover:text-slate-900">Contact</a>
              <a href="#contact" class="inline-flex items-center gap-2 rounded-full bg-[#468A9A] px-4 py-2 text-white hover:opacity-95 transition-colors">
                <span>Hubungi Saya</span>
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </nav>

            <!-- Mobile toggle -->
            <button id="mobileToggle" class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg border border-slate-200 text-slate-700 hover:text-slate-900 hover:bg-slate-50" aria-label="Toggle Navigation">
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>

          <!-- Mobile Menu -->
          <div id="mobileMenu" class="hidden md:hidden border-t border-slate-200">
            <nav class="px-4 py-3 flex flex-col gap-3">
              <a href="#home" class="nav-link block px-2 py-2 rounded-lg hover:bg-slate-50">Home</a>
              <a href="#work" class="nav-link block px-2 py-2 rounded-lg hover:bg-slate-50">Work</a>
              <a href="#contact" class="nav-link block px-2 py-2 rounded-lg hover:bg-slate-50">Contact</a>
              <a href="#profile" class="nav-link block px-2 py-2 rounded-lg hover:bg-slate-50">Profile</a>
              <a href="#contact" class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#468A9A] px-4 py-2 text-white hover:opacity-95 transition-colors">
                <span>Contact me</span>
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Hero / Home -->
    <section id="home" class="relative overflow-clip pt-36 md:pt-40">
      <!-- Decorative background -->
      <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute -top-24 -left-24 w-[480px] h-[480px] rounded-full opacity-30 blur-3xl" style="background: radial-gradient(circle at center, rgba(70,138,154,0.25), transparent 60%);"></div>
        <div class="absolute -bottom-24 -right-24 w-[520px] h-[520px] rounded-full opacity-30 blur-3xl" style="background: radial-gradient(circle at center, rgba(70,138,154,0.15), transparent 60%);"></div>
      </div>

      <div class="mx-auto max-w-7xl px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div class="reveal">
            <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/60 px-3 py-1 text-sm text-slate-600 shadow-sm">
              <i class="fa-regular fa-hand"></i>
              hello
            </span>
            <h1 class="mt-5 text-4xl md:text-5xl font-extrabold leading-tight text-slate-900">
              I'am <span class="text-[#468A9A]">Abdurrahim Tarigan</span>
            </h1>
            <p class="mt-4 text-slate-600">
              Who am I: A student who is currently actively building a portfolio and honing my skills in ui/ux design, robotics, and industrial engineering.
            </p>
            <p class="mt-2 text-slate-600">
              field: UI/UX Design, robotics, and industrial engineering.
            </p>

            <div class="mt-6 flex flex-wrap items-center gap-3">
              <a href="#work" class="inline-flex items-center gap-2 rounded-xl bg-[#468A9A] px-4 py-2.5 text-white shadow-sm hover:opacity-95 transition">
                View Works
                <i class="fa-solid fa-arrow-right"></i>
              </a>
              <a href="#contact" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-slate-800 hover:bg-slate-50">
                Contact
                <i class="fa-regular fa-paper-plane"></i>
              </a>
            </div>
          </div>

          <div class="reveal">
            <div class="relative flex justify-center">
              <div class="image-shell relative w-72 h-72 md:w-80 md:h-80 rounded-3xl border border-slate-200 shadow-md overflow-hidden">
                <img
                  class="w-full h-full object-cover"
                  src="{{asset('images/profile1.jpg')}}"
                  loading="lazy"
                  alt="Potret close-up bergaya minimalis: wajah seorang profesional dengan pencahayaan lembut, latar belakang putih bersih, palet warna netral, fokus pada ekspresi percaya diri dan ramah, komposisi pusat, estetika modern"
                  onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5ff915af-5290-421a-ae7c-1e5f5885e9a5.png'; this.alt='Gambar potret pengganti dengan latar belakang putih, teks: Portrait Unavailable';"
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mx-auto max-w-7xl px-4 mt-16">
        <div class="reveal grid grid-cols-2 md:grid-cols-3 gap-4">
          <div class="rounded-2xl border border-slate-200 bg-white p-5">
            <p class="text-3xl font-bold text-[#468A9A]">2+</p>
            <p class="text-slate-600">Years of Experience</p>
          </div>
          <div class="rounded-2xl border border-slate-200 bg-white p-5">
            <p class="text-3xl font-bold text-[#468A9A]">15+</p>
            <p class="text-slate-600">Project Completed</p>
          </div>
          <div class="rounded-2xl border border-slate-200 bg-white p-5">
            <p class="text-3xl font-bold text-[#468A9A]">3</p>
            <p class="text-slate-600">Area of Expertise</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Work -->
    <section id="work" class="relative py-20 md:py-24">
      <div class="mx-auto max-w-7xl px-4">
        <div class="reveal text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Work</h2>
          <p class="mt-3 text-slate-600">A small selection of projects I have worked on and completed</p>
        </div>

        <!-- Grid: 3x3 -->
        <div class="reveal grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
          <!-- Project 1 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{ asset('images/trash.png') }}"
                loading="lazy"
                alt="Tangkapan layar antarmuka dashboard modern dengan grafik area biru kehijauan, tata letak kartu minimalis, dan navigasi samping sederhana pada latar putih"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9b4d7534-8f41-4846-90fa-972f1eb61795.png'; this.alt='Gambar pengganti untuk antarmuka dashboard minimalis';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Robotik - Smart Trash Bin</h3>
              <p class="mt-2 text-slate-600">design of IoT-based smart trash bins.</p>
            </div>
          </article>

          <!-- Project 2 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{asset('images/lampu.jpg')}}"
                loading="lazy"
                alt="Antarmuka aplikasi mobile bergaya iOS dengan kartu produk sederhana, tombol aksen warna teal, dan tipografi bersih pada latar putih"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/8123ebcd-f1b6-47be-b6ae-33b509e39c96.png'; this.alt='Gambar pengganti untuk antarmuka aplikasi mobile';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Robotik - Smart Lamp at Room </h3>
              <p class="mt-2 text-slate-600">A bedroom lamp design that can be controlled via a mobile phone.</p>
            </div>
          </article>

          <!-- Project 3 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{asset('images/tabungan.jpg')}}"
                loading="lazy"
                alt="Desain landing page minimalis dengan judul besar, tombol ajakan bertindak warna teal, dan ilustrasi sederhana pada latar putih bersih"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2353f9cd-6448-4288-8c76-3539404a8bf3.png'; this.alt='Gambar pengganti untuk landing page minimalis';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Robotik - Smart Donation Box </h3>
              <p class="mt-2 text-slate-600">A donation box that can calculate automatically.</p>
            </div>
          </article>

          <!-- Project 4 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{asset('images/cvzone.jpg')}}"
                loading="lazy"
                alt="Halaman design system dengan komponen tombol, kartu, tipografi, dan palet warna teal serta abu muda dalam grid rapi"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/77983dfb-3da9-406c-aa87-a488f72ec11e.png'; this.alt='Gambar pengganti untuk halaman design system';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Robotik - Face Tracking</h3>
              <p class="mt-2 text-slate-600">A device that can detect movement for a parameter.</p>
            </div>
          </article>

          <!-- Project 5 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{asset('images/mockup1.png')}}"
                loading="lazy"
                alt="Prototipe interaktif dengan transisi halus, kartu produk melayang, dan tombol aksi berwarna teal pada latar minimalis"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7caebc1d-c112-4bca-9ee0-41488d609687.png'; this.alt='Gambar pengganti untuk prototipe interaktif';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Design - UI/UX Design for Education</h3>
              <p class="mt-2 text-slate-600">Application prototype for the education sector.</p>
            </div>
          </article>

          <!-- Project 6 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{asset('images/mockup4.png')}}"
                loading="lazy"
                alt="Halaman analitik dengan grafik batang dan garis, tata letak dua kolom, dan aksen warna teal halus"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bd0de24c-fb0c-4a65-921e-f398af4e8725.png'; this.alt='Gambar pengganti untuk halaman analitik';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Design - UI/UX Design for healty</h3>
              <p class="mt-2 text-slate-600">Application prototypes for the healthcare sector </p>
            </div>
          </article>

          <!-- Project 7 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{asset('images/esp8266.jpg')}}"
                loading="lazy"
                alt="Grid portofolio dengan kartu-kartu putih berbayang tipis, gambar hero, dan tipografi kontras sederhana"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/56338ea1-7f34-4874-a3ba-69993141e1b7.png'; this.alt='Gambar pengganti untuk grid portofolio';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Robotik - Daughter esp8266</h3>
              <p class="mt-2 text-slate-600"> Wifi manipulation device</p>
            </div>
          </article>

          <!-- Project 8 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="{{asset('images/portopolio.png')}}"
                loading="lazy"
                alt="Desain blog minimalis dengan kartu artikel, gambar unggulan, dan judul tebal pada latar putih bersih"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c27faf2a-b9ae-4426-867c-f4602af94f44.png'; this.alt='Gambar pengganti untuk UI blog';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Website - Personal Portopolio</h3>
              <p class="mt-2 text-slate-600">Innovative website containing a personal portfolio</p>
            </div>
          </article>

          <!-- Project 9 -->
          <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-md transition-shadow">
            <div class="image-shell aspect-[16/10] overflow-hidden">
              <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6c7631bf-fb91-40eb-9de3-63ceb70da762.png"
                loading="lazy"
                alt="Panel admin bersih dengan tabel data, filter sederhana, tombol aksi warna teal, dan layout minimal"
                onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/868360ac-a79e-4875-9af6-50e430bcb791.png'; this.alt='Gambar pengganti untuk panel admin';"
              >
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-slate-900">Database — Admin website</h3>
              <p class="mt-2 text-slate-600">An administration panel focused on efficiency and clarity.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

   

    <!-- Profile -->
    <section id="profile" class="relative py-20 md:py-24">
      <div class="mx-auto max-w-7xl px-4">
        <div class="reveal text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Profile</h2>
          <p class="mt-3 text-slate-600">Brief profile and personal information.</p>
        </div>

        <div class="reveal mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="rounded-2xl border border-slate-200 bg-white p-6">
            <div class="flex items-center gap-5">
              <div class="image-shell w-28 h-28 rounded-2xl overflow-hidden border border-slate-200">
                <img
                  class="w-full h-full object-cover"
                  src="{{asset('images/profile1.jpg')}}"
                  loading="lazy"
                  alt="Potret setengah badan dengan latar belakang putih bersih, gaya pencahayaan natural, wajah tersenyum ramah dengan pakaian kasual rapi, warna aksen teal halus"
                  onerror="this.onerror=null; this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dafef5df-48a5-4ed5-9514-587d5b2f3413.png'; this.alt='Gambar potret pengganti profil, latar putih, teks: Profile Photo Unavailable';"
                >
              </div>
              <div>
                <p class="text-xs uppercase tracking-wider text-slate-500">Profile</p>
                <h3 class="text-xl font-semibold text-slate-900">Name: Abudrrahim Tarigan</h3>
                <p class="text-slate-600">Date of Birth: 25 December 2007</p>
                <p class="text-slate-600">Asal: Medan, Indonesia</p>
              </div>
            </div>

            <div class="mt-5">
              <p class="text-slate-700">
                Description: I am a student who is currently focusing on design, robotics, and industrial engineering. In the future, I would like to study electronics in greater depth.
              </p>
            </div>

            <div class="mt-6 flex flex-wrap gap-3">
              <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 px-3 py-1 text-sm text-slate-700">
                <i class="fa-solid fa-palette text-[#468A9A]"></i> UI/UX
              </span>
              <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 px-3 py-1 text-sm text-slate-700">
                <i class="fa-solid fa-code text-[#468A9A]"></i> Frontend
              </span>
              <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 px-3 py-1 text-sm text-slate-700">
                <i class="fa-solid fa-bolt text-[#468A9A]"></i> Prototyping
              </span>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 bg-white p-6">
            <h4 class="font-semibold text-slate-900">Skills Summary</h4>
            <ul class="mt-3 space-y-2 text-slate-700">
              <li class="flex items-start gap-3">
                <i class="fa-regular fa-circle-check text-[#468A9A] mt-1"></i>
                Able to design innovative and renewable technologies
              </li>
              <li class="flex items-start gap-3">
                <i class="fa-regular fa-circle-check text-[#468A9A] mt-1"></i>
                Modern front-end development using HTML, CSS (Tailwind), and JavaScript.
              </li>
              <li class="flex items-start gap-3">
                <i class="fa-regular fa-circle-check text-[#468A9A] mt-1"></i>
                Prototyping for idea validation and UX feasibility testing. 
              </li>
            </ul>

            <div class="mt-6 rounded-xl border border-slate-200 p-4">
              <p class="text-sm text-slate-500">my organization</p>
              <div class="mt-3 grid grid-cols-2 gap-3">
                <div class="image-shell aspect-square rounded-xl overflow-hidden border border-slate-200">
                  <!--<img
                    class="w-full h-full object-cover"
                    src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0ef095d6-2e5c-41e5-a7dc-255f90df5a62.png"
                    loading="lazy"
                    alt="Potret profesional close-up, ekspresi percaya diri, latar belakang putih bersih, pencahayaan lembut, framing bahu ke atas"
                    onerror="this.onerror=null; this.src='https://placehold.co/800x800?text=Portrait+Unavailable'; this.alt='Gambar potret pengganti 1 dengan latar putih';"
                  />-->
                </div>
                <div class="image-shell aspect-square rounded-xl overflow-hidden border border-slate-200">
                  <!--<img
                    class="w-full h-full object-cover"
                    src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2211771d-8f48-4d2a-8ba7-9daae177a017.png"
                    loading="lazy"
                    alt="Potret semi-profil dengan latar belakang putih minimal, pencahayaan natural, pakaian kasual rapi, estetika modern"
                    onerror="this.onerror=null; this.src='https://placehold.co/800x800?text=Portrait+Unavailable'; this.alt='Gambar potret pengganti 2 dengan latar putih';"
                  />-->
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

     <!-- Contact -->
    <section id="contact" class="relative py-20 md:py-24">
      <div class="mx-auto max-w-7xl px-4">
        <div class="reveal text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Contact</h2>
          <p class="mt-3 text-slate-600">Informasi kontak dan peta lokasi.</p>
        </div>

        <div class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-6">
          <!-- Contact Info -->
          <div class="reveal lg:col-span-1 space-y-4">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
              <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#468A9A]/10 text-[#468A9A]">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                  <p class="font-semibold">Address</p>
                  <p class="text-slate-600">Jl. Perjuangan Desa Tanjung Selamat</p>
                </div>
              </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
              <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#468A9A]/10 text-[#468A9A]">
                  <i class="fa-regular fa-envelope"></i>
                </div>
                <div>
                  <p class="font-semibold">Gmail</p>
                  <a href="mailto:rahimtrg4@gmail.com" class="text-[#468A9A] hover:underline">rahimtrg4@gmail.com</a>
                </div>
              </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
              <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#468A9A]/10 text-[#468A9A]">
                  <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div>
                  <p class="font-semibold">WhatsApp</p>
                  <a href="https://wa.me/62882016359304" target="_blank" rel="noopener" class="text-[#468A9A] hover:underline">+62 882-0163-59304</a>
                </div>
              </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
              <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#468A9A]/10 text-[#468A9A]">
                  <i class="fa-brands fa-tiktok"></i>
                </div>
                <div>
                  <p class="font-semibold">TikTok</p>
                  <a href="https://www.tiktok.com/@ibu11bu" target="_blank" rel="noopener" class="text-[#468A9A] hover:underline">@ibu11bu</a>
                </div>
              </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
              <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#468A9A]/10 text-[#468A9A]">
                  <i class="fa-brands fa-instagram"></i>
                </div>
                <div>
                  <p class="font-semibold">Instagram</p>
                  <a href="https://www.instagram.com/rahm_trg" target="_blank" rel="noopener" class="text-[#468A9A] hover:underline">@rahm_trg</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Map -->
          <div class="reveal lg:col-span-2 rounded-2xl border border-slate-200 overflow-hidden bg-white">
            <div class="aspect-[16/9]">
              <iframe
                title="Peta Lokasi - Jakarta Pusat"
                class="w-full h-full"
                src="https://www.openstreetmap.org/export/embed.html?bbox=98.61552357673646%2C3.519214418604207%2C98.62556576728822%2C3.5269352903350657&amp;layer=mapnik"
                style="border:0;"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <div class="p-3 text-sm text-slate-500">
              If the map does not appear, open it in
              <a class="text-[#468A9A] hover:underline" target="_blank" rel="noopener" href="https://www.openstreetmap.org/?mlat=-6.182&mlon=106.83#map=13/-6.182/106.83">OpenStreetMap</a>.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-200">
      <div class="mx-auto max-w-7xl px-4 py-8 flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-slate-600 text-sm">© <span id="year"></span> Abdurrahim Tarigan. All rights reserved.</p>
        <div class="flex items-center gap-4">
          <a class="text-slate-500 hover:text-[#468A9A]" href="#home">Home</a>
          <a class="text-slate-500 hover:text-[#468A9A]" href="#work">Work</a>
          <a class="text-slate-500 hover:text-[#468A9A]" href="#contact">Contact</a>
          <a class="text-slate-500 hover:text-[#468A9A]" href="#profile">Profile</a>
        </div>
      </div>
    </footer>

    <!-- Back to top button -->
    <button id="toTop" class="fixed bottom-5 right-5 z-40 hidden rounded-full bg-[#468A9A] text-white w-11 h-11 shadow-lg hover:opacity-95">
      <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script>
      
      const glowCursor = document.createElement('div');
      glowCursor.style.position = 'fixed';
      glowCursor.style.top = '0';
      glowCursor.style.left = '0';
      glowCursor.style.width = '40px';
      glowCursor.style.height = '40px';
      glowCursor.style.borderRadius = '50%';
      glowCursor.style.pointerEvents = 'none';
      glowCursor.style.background = 'rgba(70, 138, 154, 0.4)'; // warna #468A9A dengan transparansi
      glowCursor.style.boxShadow = '0 0 15px 8px rgba(70, 138, 154, 0.6)';
      glowCursor.style.transform = 'translate(-50%, -50%)';
      glowCursor.style.transition = 'top 0.010s ease, left 0.010s ease';
      glowCursor.style.zIndex = '9999';
      document.body.appendChild(glowCursor);

      window.addEventListener('mousemove', e => {
        glowCursor.style.top = e.clientY + 'px';
        glowCursor.style.left = e.clientX + 'px';
      });


      // Year in footer
      document.getElementById('year').textContent = new Date().getFullYear();

      // Mobile menu toggle
      const mobileToggle = document.getElementById('mobileToggle');
      const mobileMenu = document.getElementById('mobileMenu');
      mobileToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
      // Close mobile menu on nav click
      mobileMenu.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => mobileMenu.classList.add('hidden'));
      });

      // Reveal on scroll
      const revealEls = document.querySelectorAll('.reveal');
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });
      revealEls.forEach(el => revealObserver.observe(el));

      // Scrollspy for nav
      const sections = [...document.querySelectorAll('section[id]')];
      const navLinks = document.querySelectorAll('.nav-link');
      const setActive = (id) => {
        navLinks.forEach(link => {
          const target = link.getAttribute('href').replace('#','');
          if (target === id) link.classList.add('active');
          else link.classList.remove('active');
        });
      };
      const spy = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            setActive(entry.target.id);
          }
        });
      }, { rootMargin: "-40% 0px -50% 0px" });
      sections.forEach(section => spy.observe(section));

      // Back to top button
      const toTop = document.getElementById('toTop');
      window.addEventListener('scroll', () => {
        if (window.scrollY > 600) toTop.classList.remove('hidden');
        else toTop.classList.add('hidden');
      });
      toTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
      
    </script>
  </body>
</html>