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
   .container {
      max-width:98%;
      margin: 5px auto;
      overflow-x: auto;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .header h1 {
      font-size: 24px;
      margin: 0;
    }

    .btn-add {
      background-color: black;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      font-size: 14px;
      transition: background-color 0.3s;
    }

    .btn-add:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    thead {
      background-color: #007bff;
      color: white;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border: 1px solid #ddd;
    }

    th {
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 14px;
    }


    .action-button {
      background-color: green;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .action-button:hover {
      background-color: #0056b3;
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
       <a class="flex items-center text-gray-600 font-bold" href="TNVSFinance.php">
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
        <ul class="pl-8 mt-2" id="budgetDropdown">
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
          <a class="text-blue-700 font-bold" href="BMBudgetAllocation.php">
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
        <ul class=" hidden pl-8 mt-2" id="apDropdown">
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
    <div class="container">
  <div class="header">
    <h1>Budget Allocation</h1>
    <button class="btn-add">Add Budget Allocation</button>
  </div>

  <table>
    <thead>
      <tr>
        <th>Request ID</th>
        <th>Departments</th>
        <th>Expense Categories</th>
        <th>Allocated Amount</th>
        <th>Remaining Balance</th>
        <th>Spent</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>HR</td>
        <td>Salaries</td>
        <td>100,000</td>
        <td>50,000</td>
        <td>50,000</td>
        <td><button class="action-button">Adjust</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Logistics</td>
        <td>Maintenance</td>
        <td>100,000</td>
        <td>30,000</td>
        <td>70,000</td>
        <td><button class="action-button">Adjust</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>IT</td>
        <td>Software Licenses</td>
        <td>200,000</td>
        <td>120,000</td>
        <td>80,000</td>
        <td><button class="action-button">Adjust</button></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Marketing</td>
        <td>Advertising</td>
        <td>150,000</td>
        <td>60,000</td>
        <td>90,000</td>
        <td><button class="action-button">Adjust</button></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Finance</td>
        <td>Consulting Fees</td>
        <td>80,000</td>
        <td>40,000</td>
        <td>40,000</td>
        <td><button class="action-button">Adjust</button></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Operations</td>
        <td>Equipment</td>
        <td>300,000</td>
        <td>200,000</td>
        <td>100,000</td>
        <td><button class="action-button">Adjust</button></td>
      </tr>
      <tr>
        <td>7</td>
        <td>Legal</td>
        <td>Compliance Fees</td>
        <td>50,000</td>
        <td>10,000</td>
        <td>40,000</td>
        <td><button class="action-button">Adjust</button></td>
      </tr>
    </tbody>
  </table>
</div>
     
  </div>
 </body>
</html>