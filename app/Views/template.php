<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="images/x-icon" href="<?= base_url('/AdminLTE/img/icon1.png') ?>" />
    <title>
        PENDATAAN BANTUAN WARGA
        Dusun Bantarpayung
        Jln. Raya Karangnunggal No. 73 Tlp (0265) 566274 Singajaya – Cibalong 46185
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('/AdminLTE/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('AdminLTE/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php echo view('sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session('nama_lengkap') ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('/AdminLTE/img/undraw_profile.svg'); ?>">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?= $this->renderSection('content'); ?>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pemerintah Daerah Kabupaten Tasikmalaya</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('/AdminLTE/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('/AdminLTE/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('/AdminLTE/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('/AdminLTE/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('/AdminLTE/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('/AdminLTE/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?= base_url('/AdminLTE/js/demo/chart-pie-demo.js'); ?>"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: 'Bfrtip',
                buttons: ['excel', 'pdf', 'print']
            });
        });
    </script>

    <script>
        const form = document.querySelector(".form");
        const dropdowns = document.querySelectorAll(".dropdown");

        // Check if Dropdowns are Exist
        // Loop Dropdowns and Create Custom Dropdown for each Select Element
        if (dropdowns.length > 0) {
            dropdowns.forEach((dropdown) => {
                createCustomDropdown(dropdown);
            });
        }

        // Check if Form Element Exist on Page
        if (form !== null) {
            form.addEventListener("submit", (e) => {
                e.preventDefault();
            });
        }

        // Create Custom Dropdown
        function createCustomDropdown(dropdown) {
            // Get All Select Options
            // And Convert them from NodeList to Array
            const options = dropdown.querySelectorAll("option");
            const optionsArr = Array.prototype.slice.call(options);

            // Create Custom Dropdown Element and Add Class Dropdown
            const customDropdown = document.createElement("div");
            customDropdown.classList.add("dropdown");
            dropdown.insertAdjacentElement("afterend", customDropdown);

            // Create Element for Selected Option
            const selected = document.createElement("div");
            selected.classList.add("dropdown-select");
            selected.textContent = optionsArr[0].textContent;
            customDropdown.appendChild(selected);

            // Create Element for Dropdown Menu
            // Add Class and Append it to Custom Dropdown
            const menu = document.createElement("div");
            menu.classList.add("dropdown-menu");
            customDropdown.appendChild(menu);
            selected.addEventListener("click", toggleDropdown.bind(menu));

            // Create Search Input Element
            const search = document.createElement("input");
            search.placeholder = "Search...";
            search.type = "text";
            search.classList.add("dropdown-menu-search");
            menu.appendChild(search);

            // Create Wrapper Element for Menu Items
            // Add Class and Append to Menu Element
            const menuInnerWrapper = document.createElement("div");
            menuInnerWrapper.classList.add("dropdown-menu-inner");
            menu.appendChild(menuInnerWrapper);

            // Loop All Options and Create Custom Option for Each Option
            // And Append it to Inner Wrapper Element
            optionsArr.forEach((option) => {
                const item = document.createElement("div");
                item.classList.add("dropdown-menu-item");
                item.dataset.value = option.value;
                item.textContent = option.textContent;
                menuInnerWrapper.appendChild(item);

                item.addEventListener(
                    "click",
                    setSelected.bind(item, selected, dropdown, menu)
                );
            });

            // Add Selected Class to First Custom Select Option
            menuInnerWrapper.querySelector("div").classList.add("selected");

            // Add Input Event to Search Input Element to Filter Items
            // Add Click Event to Element to Close Custom Dropdown if Clicked Outside
            // Hide the Original Dropdown(Select)
            search.addEventListener("input", filterItems.bind(search, optionsArr, menu));
            document.addEventListener(
                "click",
                closeIfClickedOutside.bind(customDropdown, menu)
            );
            dropdown.style.display = "none";
        }

        // Toggle for Display and Hide Dropdown
        function toggleDropdown() {
            if (this.offsetParent !== null) {
                this.style.display = "none";
            } else {
                this.style.display = "block";
                this.querySelector("input").focus();
            }
        }

        // Set Selected Option
        function setSelected(selected, dropdown, menu) {
            // Get Value and Label from Clicked Custom Option
            const value = this.dataset.value;
            const label = this.textContent;

            // Change the Text on Selected Element
            // Change the Value on Select Field
            selected.textContent = label;
            dropdown.value = value;

            // Close the Menu
            // Reset Search Input Value
            // Remove Selected Class from Previously Selected Option
            // And Show All Div if they Were Filtered
            // Add Selected Class to Clicked Option
            menu.style.display = "none";
            menu.querySelector("input").value = "";
            menu.querySelectorAll("div").forEach((div) => {
                if (div.classList.contains("is-select")) {
                    div.classList.remove("is-select");
                }
                if (div.offsetParent === null) {
                    div.style.display = "block";
                }
            });
            this.classList.add("is-select");
        }

        // Filter the Items
        function filterItems(itemsArr, menu) {
            // Get All Custom Select Options
            // Get Value of Search Input
            // Get Filtered Items
            // Get the Indexes of Filtered Items
            const customOptions = menu.querySelectorAll(".dropdown-menu-inner div");
            const value = this.value.toLowerCase();
            const filteredItems = itemsArr.filter((item) =>
                item.value.toLowerCase().includes(value)
            );
            const indexesArr = filteredItems.map((item) => itemsArr.indexOf(item));

            // Check if Option is not Inside Indexes Array
            // And Hide it and if it is Inside Indexes Array and it is Hidden Show it
            itemsArr.forEach((option) => {
                if (!indexesArr.includes(itemsArr.indexOf(option))) {
                    customOptions[itemsArr.indexOf(option)].style.display = "none";
                } else {
                    if (customOptions[itemsArr.indexOf(option)].offsetParent === null) {
                        customOptions[itemsArr.indexOf(option)].style.display = "block";
                    }
                }
            });
        }

        // Close Dropdown if Clicked Outside Dropdown Element
        function closeIfClickedOutside(menu, e) {
            if (
                e.target.closest(".dropdown") === null &&
                e.target !== this &&
                menu.offsetParent !== null
            ) {
                menu.style.display = "none";
            }
        }
    </script>
</body>

</html>