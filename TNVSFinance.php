<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script>
   function toggleSidebar() {
     const sidebar = document.getElementById('sidebar');
     sidebar.classList.toggle('hidden');
   }

   function toggleDropdown(id) {
     const dropdown = document.getElementById(id);
     const icon = dropdown.previousElementSibling.querySelector('.fas.fa-chevron-right');
     dropdown.classList.toggle('hidden');
     icon.classList.toggle('rotate-90');
   }

  </script>
  <style>
   .rotate-90 {
     transform: rotate(90deg);
     transition: transform 0.3s ease;
   }
    </style>
   
  </style>
 </head>  
 <body class="bg-white-900">
  <div class="flex h-screen">
   <!-- Sidebar -->
   <div id="sidebar" class="w-64 bg-white p-4 z-10">
    <div class="flex items-center mb-6">
     <img alt="Movers logo" class="mr-2" height="200px" src="logo.png" width="250px"/>
     <span class="text-2xl font-bold text-blue-600">
      
     </span>
    </div>
    <nav>
     <ul>
      <li class="mb-4">
       <a class="flex items-center text-blue-600 font-bold" href="#">
        <i class="fas fa-th-large mr-2">
        </i>
        Dashboard
       </a>
      </li>
      <li class="mb-4">
       <div>
        <a class="flex items-center text-gray-700 font-bold cursor-pointer" onclick="toggleDropdown('budgetDropdown')">
       <i class="fas fa-calculator mr-2"></i>
         </i>
         Budget
         <i class="fas fa-chevron-right ml-auto transition-transform duration-300">
         </i>
        </a>
        <ul class="hidden pl-8 mt-2" id="budgetDropdown">
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="BMBudgetRequest.php">
           Budget Requests
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="BMRejectRequest.php">
           Rejected Requests
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="BMBudgetAllocation.php">
           Budget Allocation
          </a>
         </li>
        </ul>
       </div>
      </li>
      <li class="mb-4">
       <div>
        <a class="flex items-center text-gray-700 font-bold cursor-pointer" onclick="toggleDropdown('disburseDropdown')">
         <i class="fas fa-coins mr-2">
         </i>
         Disbursement
         <i class="fas fa-chevron-right ml-auto transition-transform duration-300">
         </i>
        </a>
        <ul class="hidden pl-8 mt-2" id="disburseDropdown">
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="DPayoutApproval.php">
           Payout Approval
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="DPayout.php">
           Payout
          </a>
         </li>
        </ul>
       </div>
      </li>
      <li class="mb-4">
       <div>
        <a class="flex items-center text-gray-700 font-bold cursor-pointer" onclick="toggleDropdown('collectDropdown')">
         <i class="fas fa-Gift mr-2">
         </i>
         Collection
         <i class="fas fa-chevron-right ml-auto transition-transform duration-300">
         </i>
        </a>
        <ul class="hidden pl-8 mt-2" id="collectDropdown">
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="CPaymentRecords.php">
           Payment Records
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="CReceivableRecords.php">
           Receivable Records
          </a>
         </li>
        </ul>
       </div>
      </li>
      <li class="mb-4">
       <div>
        <a class="flex items-center text-gray-700 font-bold cursor-pointer" onclick="toggleDropdown('apDropdown')">
         <i class="fas fa-landmark mr-2">
         </i>
         Account Payables
         <i class="fas fa-chevron-right ml-auto transition-transform duration-300">
         </i>
        </a>
        <ul class="hidden pl-8 mt-2" id="apDropdown">
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="APPayables.php">
           Payables
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="APInvoiceApproval.php">
           Invoice Approval
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="APPaidAccounts.php">
           Paid Accounts
          </a>
         </li>
        </ul>
       </div>
      </li>
      <li>
<li class="mb-4">
       <div>
        <a class="flex items-center text-gray-700 font-bold cursor-pointer" onclick="toggleDropdown('arDropdown')">
         <i class="fas fa-file-invoice-dollar mr-2">
         </i>
         Account Receivables
         <i class="fas fa-chevron-right ml-auto transition-transform duration-300">
         </i>
        </a>
        <ul class="hidden pl-8 mt-2" id="arDropdown">
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="ARReceivables.php">
           Receivables
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="ARAgingReport.php">
           Aging Report
          </a>
         </li>
        </ul>
       </div>
      </li>
      <li>
	<li>
<li class="mb-4">
       <div>
        <a class="flex items-center text-gray-700 font-bold cursor-pointer" onclick="toggleDropdown('glDropdown')">
         <i class="fas fa-book mr-2">
         </i>
         General Ledger
         <i class="fas fa-chevron-right ml-auto transition-transform duration-300">
         </i>
        </a>
        <ul class="hidden pl-8 mt-2" id="glDropdown">
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="GLChartsofAccounts.php">
           Charts of Accounts
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="GLDisbursedRecords.php">
           Disbursed Records
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="GLCollectedRecords.php">
           Collected Records
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="GLAssetRecords.php">
           Asset Records
          </a>
         </li>
        </ul>
       </div>
       </li>
      <li>
	<li>
<li class="mb-4">
       <div>
        <a class="flex items-center text-gray-700 font-bold cursor-pointer" onclick="toggleDropdown('taxDropdown')">
         <i class="fas fa-file-invoice mr-2">
         </i>
         Tax Management
         <i class="fas fa-chevron-right ml-auto transition-transform duration-300">
         </i>
        </a>
        <ul class="hidden pl-8 mt-2" id="taxDropdown">
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="TAXemployees.php">
           Employees Tax Records
          </a>
         </li>
         <li class="mb-2">
          <a class="text-gray-700 font-bold" href="TAXpaidrecords.php">
           Paid Tax Records
          </a>
         </li>
        </ul>
       </div>
      </li>
      
      <li>
       <a class="text-red-600 font-bold" href="#">
        Report
       </a>
      </li>
     </ul>
    </nav>
   </div>
   <!-- Main content -->
   <div class="flex-1 flex flex-col">
    <!-- Header -->
    <header class="flex items-center justify-between bg-white p-4 shadow-lg">
     <div class="flex items-center">
      <button class="text-2xl mr-4" onclick="toggleSidebar()">
       <i class="fas fa-bars">
       </i>
      </button>
      <h1 class="text-xl font-bold text-blue-600">
       Finance
      </h1>
     </div>
     <div class="relative">
      <button class="flex items-center" onclick="toggleDropdown('userDropdown')">
       <img alt="User avatar" class="rounded-full" height="40" src="logo.jpg" width="40"/>
      </button>
      <div id="userDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 hidden">
       <a class="block px-4 py-2 text-gray-700 font-bold" href="#">
        Profile
       </a>
       <a class="block px-4 py-2 text-gray-700 font-bold" href="#">
        Settings
       </a>
       <a class="block px-4 py-2 text-gray-700 font-bold" href="#">
        Logout
       </a>
      </div>
     </div>
    </header>
    <!-- Breadcrumb -->
    <div class="bg-blue-200 p-4 shadow-lg">
     <nav class="text-gray-600 font-bold">
      <ol class="list-reset flex">
       <li>
        <a class="text-gray-600 font-bold" href="#">
         Dashboard
        </a>
       </li>
       <li>
        <span class="mx-2">
         &gt;
        </span>
       </li>
       <li>
        <a class="text-gray-600 font-bold" href="#">
         Finance Operator
        </a>
       </li>
      </ol>
     </nav>
    </div>
    <!-- Main content area -->
    
    <div class="flex-1 bg-blue-100 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white p-4 rounded-lg shadow-lg">
       <h2 class="text-xl font-bold mb-2">
        Total Revenue
       </h2>
       <p class="text-3xl font-bold text-blue-600">
        ₱100,000
       </p>
      </div>
      <!-- Card 2 -->
      <div class="bg-white p-4 rounded-lg shadow-lg">
       <h2 class="text-xl font-bold mb-2">
        Total Expenses
       </h2>
       <p class="text-3xl font-bold text-blue-600">
        ₱51,000
       </p>
      </div>
      <!-- Card 3 -->
      <div class="bg-white p-4 rounded-lg shadow-lg">
       <h2 class="text-xl font-bold mb-2">
        Net Income
       </h2>
       <p class="text-3xl font-bold text-blue-600">
        ₱49,000
       </p>
      </div>
      <!-- Card 4 -->
      <div class="bg-white p-4 rounded-lg shadow-lg">
       <h2 class="text-xl font-bold mb-2">
        Last Month Estimate Budget 
       </h2>
       <p class="text-3xl font-bold text-blue-600">
        ₱52,000
       </p>
      </div>
      <!-- Card 5 -->
      <div class="bg-white p-4 rounded-lg shadow-lg">
       <h2 class="text-xl font-bold mb-2">
        Actual Spending Last Month
       </h2>
       <p class="text-3xl font-bold text-blue-600">
        ₱49,000
       </p>
      </div>
      <!-- Card 6 -->
      <div class="bg-white p-4 rounded-lg shadow-lg">
       <h2 class="text-xl font-bold mb-2">
        Estimated Budget Next Month
       </h2>
       <p class="text-3xl font-bold text-blue-600">
        ₱52,000
       </p>
      </div>
     </div>
    </div>
   </div>
    
 
     
  </div>
 </body>
</html>