@php use Illuminate\Support\Str; @endphp
        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Daftar Film</title>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Hapus</title>
  <style>

    .dialog-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .dialog-box {
      background-color: #1a1a1a;
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
      text-align: center;
      max-width: 300px;
      width: 100%;
    }

    .dialog-box p {
      margin-bottom: 20px;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
    }

    .button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .button.yes {
      background-color: #4caf50;
      color: white;
    }

    .button.no {
      background-color: #f44336;
      color: white;
    }

    .delete-btn {
      padding: 0;
      border: none;
      background: none;
      cursor: pointer;
    }

    .delete-btn svg {
      stroke: red;
    }
  </style>
</head>

<body class="layout-boxed">
<script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
<div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                    <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                       aria-label="Open user menu">
                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                        <div class="d-none d-xl-block ps-2">
                            <div>Fauzan Raif</div>
                            <div class="mt-1 small text-secondary">UI Designer</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="#" class="dropdown-item">Status</a>
                        <a href="./profile.html" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Feedback</a>
                        <div class="dropdown-divider"></div>
                        <a href="./settings.html" class="dropdown-item">Settings</a>
                        <a href="./sign-in.html" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/roles">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24" height="24"
           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
           stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="9" cy="7" r="4"/>
        <path d="M9 14a6 6 0 0 0 6 6"/>
        <path d="M15 19l2 2l4 -4"/>
      </svg>
    </span>
                                <span class="nav-link-title">Peran</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/users">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24"
           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
           stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="7" r="4"/>
        <path
                d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z"/>
      </svg>
    </span>
                                <span class="nav-link-title">Pengguna</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/casts">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
           stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="9" cy="7" r="4"/>
        <circle cx="15" cy="7" r="4"/>
        <path
                d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z"/>
      </svg>
    </span>
                                <span class="nav-link-title">Pemeran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/genres">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24" height="24"
           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
           stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M4 4h6v6h-6z"/>
        <path d="M14 4h6v6h-6z"/>
        <path d="M4 14h6v6h-6z"/>
        <circle cx="17" cy="17" r="3"/>
      </svg>
    </span>
                                <span class="nav-link-title">Genre</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/movies">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-film" width="24" height="24"
           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
           stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="3" y="3" width="18" height="18" rx="2"/>
        <line x1="7" y1="3" x2="7" y2="21"/>
        <line x1="17" y1="3" x2="17" y2="21"/>
        <line x1="3" y1="7" x2="21" y2="7"/>
        <line x1="3" y1="17" x2="21" y2="17"/>
      </svg>
    </span>
                                <span class="nav-link-title">Film</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="page-wrapper">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                            <h2 class="page-title">
                                Daftar Film
                            </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                        <a href="{{ route('movies.create') }}" class="btn btn-danger d-none d-sm-inline-block">
    <!-- Icon SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
         stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 5l0 14"/>
        <path d="M5 12l14 0"/>
    </svg>
    Tambah Film
</a>

                            <a href="{{ route('movies.create') }}" class="btn btn-primary d-sm-none btn-icon"
                               aria-label="Create new user">
                                <!-- Icon SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14"/>
                                    <path d="M5 12l14 0"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <div id="table-default" class="table-responsive">
                            <table class="table" id="movie-table">
                                <thead>
                                <tr>
                                    <th>
                                        <button class="table-sort" data-sort="sort-title">Judul</button>
                                    </th>
                                    <th>
                                        <button class="table-sort" data-sort="sort-synopsis">Sinopsis</button>
                                    </th>
                                    <th>
                                        <button class="table-sort" data-sort="sort-year">Tahun</button>
                                    </th>
                                    <th>
                                        <button class="table-sort" data-sort="sort-genre">Genre</button>
                                    </th>
                                    <th>
                                        <button class="table-sort" data-sort="sort-available">Tersedia</button>
                                    </th>
                                    <th>
                                        <button class="table-sort" data-sort="sort-poster">Poster</button>
                                    </th>
                                    <th>
                                        <button class="table-sort" data-sort="sort-casts">Pemeran</button>
                                    </th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody class="table-tbody">
                                @forelse ($movies as $movie)
                                    <tr>
                                        <td class="sort-title">{{ $movie->title }}</td>
                                        <td class="sort-synopsis">{{ Str::limit($movie->synopsis, 50) }}</td>
                                        <td class="sort-year">{{ $movie->year }}</td>
                                        <td class="sort-genre">{{ $movie->genre->name ?? 'N/A' }}</td>

                                        <td class="sort-available">
                                            {{ $movie->available ? 'Ya' : 'Tidak' }}
                                        </td>
                                        <td class="sort-poster">
                                            {{-- Display poster if it exists --}}
                                            @if ($movie->poster)
                                                <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster"
                                                     style="max-width: 50px; height: auto;">
                                            @else
                                                <span>No Poster</span>
                                            @endif
                                        </td>
                                        <td class="sort-casts">
                                            {{-- Display casts --}}
                                            @foreach ($movie->casts as $castMovie)
                                                {{ $castMovie->name }}{{ !$loop->last ? ', ' : '' }}
                                            @endforeach
                                        </td>
                                        <td class="sort-aksi">
                                        <div style="display: flex; gap: 10px;">
    <a href="{{ route('movies.show', $movie->id) }}" class="btn-sm btn-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-eye">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
        </svg>
    </a>

    <a href="{{ route('movies.edit', $movie->id) }}" style="padding: 0; border: none; background: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="orange" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
            <path d="M13.5 6.5l4 4" />
        </svg>
    </a>

    <button type="button" class="delete-btn" onclick="showDialog('{{ route('movies.destroy', $movie->id) }}')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M4 7l16 0" />
              <path d="M10 11l0 6" />
              <path d="M14 11l0 6" />
              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
            </svg>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Dialog Konfirmasi -->
  <div class="dialog-container" id="dialogContainer">
    <div class="dialog-box">
      <p>Apakah Anda yakin ingin menghapus film ini?</p>
      <form id="deleteForm" method="POST">
        @csrf
        @method('DELETE')
        <div class="button-container">
          <button class="button yes" type="button" onclick="handleYes()">Ya</button>
          <button class="button no" type="button" onclick="handleNo()">Tidak</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const dialogContainer = document.getElementById("dialogContainer");
    const deleteForm = document.getElementById("deleteForm");

    function showDialog(actionUrl) {
      deleteForm.action = actionUrl; // Perbarui URL form dengan ID spesifik
      dialogContainer.style.display = "flex";
    }

    function handleYes() {
      dialogContainer.style.display = "none";
      deleteForm.submit(); // Submit form untuk menghapus
    }

    function handleNo() {
      dialogContainer.style.display = "none"; // Tutup dialog tanpa aksi
    }
  </script>
</body>
</html>

                                        </td>
                                    </tr>
                                
                          
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank"
                                                            class="link-secondary" rel="noopener">Documentation</a></li>
                            <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
                            </li>
                            <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                                            class="link-secondary" rel="noopener">Source code</a></li>
                            <li class="list-inline-item">
                                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary"
                                   rel="noopener">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon text-pink icon-filled icon-inline" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
                                    </svg>
                                    Sponsor
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; 2023
                                <a href="." class="link-secondary">Tabler</a>.
                                All rights reserved.
                            </li>
                            <li class="list-inline-item">
                                <a href="./changelog.html" class="link-secondary" rel="noopener">
                                    v1.0.0-beta20
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Tabler Core -->
<script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
<!-- JavaScript for Sorting -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const table = document.querySelector('.table');
    const headers = table.querySelectorAll('.table-sort');
    const tbody = table.querySelector('.table-tbody');

    headers.forEach(header => {
      header.addEventListener('click', () => {
        const sortKey = header.dataset.sort;
        const rows = Array.from(tbody.querySelectorAll('tr'));

        const isNumericColumn = header.dataset.numeric === "true";

        rows.sort((a, b) => {
          const cellA = a.querySelector(`.${sortKey}`).textContent.trim();
          const cellB = b.querySelector(`.${sortKey}`).textContent.trim();

          if (isNumericColumn) {
            return parseFloat(cellA) - parseFloat(cellB);
          } else {
            return cellA.localeCompare(cellB);
          }
        });

        // Reverse order if already sorted in ascending order
        const isAscending = header.classList.contains('asc');
        if (isAscending) {
          rows.reverse();
          header.classList.remove('asc');
          header.classList.add('desc');
        } else {
          header.classList.remove('desc');
          header.classList.add('asc');
        }

        // Clear other header sort indicators
        headers.forEach(h => {
          if (h !== header) {
            h.classList.remove('asc', 'desc');
          }
        });

        // Append sorted rows to the tbody
        rows.forEach(row => tbody.appendChild(row));
      });
    });
  });
</script>
</body>
</html>
