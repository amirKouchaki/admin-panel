@props(['products'])

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tables | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
      @vite('resources/css/app.css')
      @vite(['resources/js/app.js'])
  </head>

  <body
    x-data="{ page: 'tables', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
    <x-partials.preloader/>
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      <x-partials.sidebar/>
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
      >
        <!-- ===== Header Start ===== -->
        <x-partials.header/>
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tables
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.html">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Tables</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Table Section Start -->
            <div class="flex flex-col gap-10">
              <!-- ====== Table One Start -->
              <x-partials.table-01/>
              <!-- ====== Table One End -->

              <!-- ====== Table Two Start -->
              <x-partials.table-02 :products="$products"/>
              <!-- ====== Table Two End -->

              <!-- ====== Table Three Start -->
              <x-partials.table-03/>
              <!-- ====== Table Three End -->
            </div>
            <!-- ====== Table Section End -->
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  </body>
</html>
