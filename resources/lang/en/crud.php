<?php

return [
    'companies' => [
        'title' => 'Companies',
        'title_singular' => 'Company',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'active' => 'Active',
            'status' => 'Status',
            'logo' => 'Logo',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'leaves' => [
        'title' => 'Leaves',
        'title_singular' => 'Leave',
        'example' => 'E.g. I am not feeling well',
        'fields' => [
            'id' => 'ID',
            'employee' => 'Employee',
            'type' => 'Type',
            'date' => 'Date',
            'status' => 'Status',
            'reason' => 'Reason',
            'max_days' => 'Max days',
            'name' => 'Name',
            'approved' => 'Approved',
            'non_approved' => 'Not Approved',
            'duration' => 'Duration',
            'user' => 'User',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'status' => [
        'title' => 'Statuses',
        'title_singular' => 'Status',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'attendanceTemplates' => [
        'title' => 'Attendance Templates',
        'title_singular' => 'Attendance Template',
        'fields' => [
            'name' => 'Name',
            'weekday' => 'Weekday',
            'start_time' => 'Start time',
            'end_time' => 'End time',
            'break_time' => 'Break Time',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'labels' => [
        'title' => 'Labels',
        'title_singular' => 'Label',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'leaveTypes' => [
        'title' => 'Leave Types',
        'title_singular' => 'Leave Type',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'max_days' => 'Max Days',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'tasks' => [
        'title' => 'Tasks',
        'title_singular' => 'Task',
        'add_new' => 'Add New Task',
        'no_tasks' => 'No Tasks Found',
        'work_loads' => 'Work loads',
        'recent_activity' => 'Recent Activity',
        'team_members' => 'Team Members',
        'comments' => 'Comments',
        'comment' => 'Comment',
        'add_comment' => 'Add comments',
        'not_comments' => 'Not comments yet',
        'fields' => [
            'id' => 'ID',
            'title' => 'Title',
            'assigned_to' => 'Assigned To',
            'status' => 'Status',
            'description' => 'Description',
            'due_date' => 'Due Date',
            'priority' => 'Priority',
            'start_date' => 'Start Date',
            'limit_hours' => 'Hour Limit',
            'tags' => 'Tags',
            'project' => 'Project',
            'task' => 'Task',
            'upload_files' => 'Files',
            'total_hours' => 'Total hours',
            'department' => 'Department',
            'parent_task' => 'Parent Task',
            'departments' => 'Departments',
            'hours_logged' => 'Hours Logged',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'notes' => [
        'title' => 'Notes',
        'title_singular' => 'Note',
        'fields' => [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'date' => 'Date',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'globalConfigurations' => [
        'title' => 'Global Configurations',
        'title_singular' => 'Global Configuration',
        'fields' => [
            'id' => 'ID',
            'key' => 'Key',
            'value' => 'Value',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'invoices' => [
        'title' => 'Invoices',
        'title_singular' => 'Invoice',
        'paid' => 'Paid',
        'no_paid' => 'No Paid',
        'fields' => [
            'id' => 'ID',
            'number' => 'Number',
            'project' => 'Project',
            'issue_date' => 'Issue Date',
            'amount' => 'Amount',
            'tax' => 'Tax',
            'total' => 'Total',
            'type' => 'Type',
            'status' => 'Status',
            'tasks' => 'Tasks',
            'client' => 'Client',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'users' => [
        'title' => 'Employees',
        'title_singular' => 'Emnployee',
        'add_new' => 'Add New Emnployee',
        'male' => 'Male',
        'female' => 'Female',
        'other' => 'Other',
        'fields' => [
            'id' => 'ID',
            'profile_img' => 'Profile Image',
            'name' => 'Name',
            'email' => 'Email',
            'birthday' => 'Birthday',
            'initial_password' => 'Initial Password',
            'department' => 'Department',
            'country' => 'City',
            'role' => 'Role',
            'code' => 'Code',
            'gender' => 'Gender',
            'report_to' => 'Report To',
            'birthday_date' => 'Birthday',
            'updated_at' => 'Updated at',
            'created_at' => 'Created at',
        ],
    ],
    'dashboard' => [
        'title' => 'Dashboards',
        'title_singular' => 'Dashboard',
        'fields' => [
            'clock_in' => 'Clock In',
            'clock_out' => 'Clock Out',
            'completed_tasks' => 'Completed Tasks',
            'all_events' => 'All Events of the Week',
            'my_calendar' => 'My Calendar',
            'all_day' => 'All Day',
            'role' => 'Role',
            'code' => 'Code',
            'gender' => 'Gender',
            'report_to' => 'Report To',
            'birthday_date' => 'Birthday',
            'updated_at' => 'Updated at',
            'created_at' => 'Created at',
        ],
    ],
    'clients' => [
        'title' => 'Clients',
        'title_singular' => 'Client',
        'client_address' => 'Client Address',
        'fields' => [
            'name' => 'Name',
            'email' => 'Email',
            'mobile_number' => 'Mobile Number',
            'status' => 'Status',
            'phone' => 'Phone',
            'vat_number' => 'VAT Number',
            'language' => 'Language',
            'address' => 'Address',
            'zip' => 'Zip Code',
            'state' => 'State',
            'company' => 'Company',
            'currency' => 'Currency',
            'country' => 'Country',
            'city' => 'City',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'attendance' => [
        'title' => 'Attendance',
        'title_singular' => 'Attendance',
        'fields' => [
            'worked_hours' => 'Worked Hours',
            'estimated_hours' => 'Estimated Hours',
            'export_sheet' => 'Export Attendance Sheet',
            'balance' => 'Balance',
            'state' => 'Status',
            'close' => 'Closed',
            'open_period' => 'This attendance sheet corresponds to an open period',
            'close_period' => 'This attendance sheet corresponds to a closed period',
            'open_all' => 'Expand All',
            'close_all' => 'Collapse All',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'documents' => [
        'title' => 'Documents',
        'title_singular' => 'Document',
        'personal_folders' => 'Personal Folders',
        'add_folder' => 'Add Folder',
        'new_folder' => 'New Folder',
        'add_file' => 'Add File',
        'search_file' => 'Search File',
        'fields' => [
        ],
    ],
    'projects' => [
        'title' => 'Projects',
        'title_singular' => 'Project',
        'add_new' => 'Add Project',
        'fields' => [
            'code' => 'Code',
            'title' => 'Title',
            'start_date' => 'Start Date',
            'assigned_to' => 'Assigned To',
            'department' => 'Department',
            'client' => 'Client',
            'limit_hours' => 'Hour Limit',
            'due_date' => 'Due Date',
            'status' => 'Status',
            'hours_logged' => 'Hours Logged',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'items' => [
        'title' => 'Items',
        'title_singular' => 'Item',
        'add_new' => 'Add New Item',
        'fields' => [
            'cover' => 'Photo',
            'name' => 'Name',
            'reference' => 'Reference',
            'upload_files' => 'Files',
            'price' => 'Price',
            'shop_place' => 'Shop Place',
            'stock' => 'Quantity',
            'edit_item' => 'Edit item',
            'files' => 'Files',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'assignments' => [
        'title' => 'Assignments',
        'title_singular' => 'Assignment',
        'add_new' => 'Add New Assignment',
        'assigned_to' => 'Assigned to',
        'fields' => [
            'user' => 'User',
            'items' => 'Items',
            'extract_date' => 'Extraction Date',
            'return_date' => 'Return Date',
            'quantity' => 'Quantity',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'expenses' => [
        'title' => 'Expenses',
        'title_singular' => 'Expense',
        'add_new' => 'Add New Expense',
        'fields' => [
            'project' => 'Project',
            'item' => 'Item',
            'quantity' => 'Quantity',
            'amount' => 'Amount',
            'facturable' => 'Billable',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'job_postings' => [
        'title' => 'Job Postings',
        'title_singular' => 'Job Posting',
        'add_new' => 'Add New Job Posting',
        'fields' => [
            'id' => 'ID',
            'title' => 'Title',
            'location' => 'Location',
            'description' => 'Description',
            'requirements' => 'Requirements',
            'skills' => 'Skills',
            'questions' => 'Questions',
            'active' => 'Active',
            'posted_at' => 'Posted At',
            'expires_at' => 'Expires At',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'landing' => [
        'seamless' => 'Seamless',
        'integration' => 'Integration',
        'elevate_enterprise' => 'Elevate your enterprise with our Customizable ERP',
        'digital_reports' => 'Digital reports of real-time worked hours, easy to use.',
        'easy_customizable' => 'Easy customizable with your branding.',
        'home' => 'HOME',
        'product' => 'PRODUCT',
        'pricing' => 'PRICING',
        'faq' => 'FAQ',
        'contact_menu' => 'CONTACT',
        'try_14_days' => 'TRY 14 DAYS',
        'request_demo' => 'REQUEST DEMO',
        'get_started' => 'GET STARTED',
        "faq_title" => "FREQUENTLY ASKED QUESTIONS",
        'services' => 'SERVICES',
        'about' => 'ABOUT US',
        'slider' => [
            'custom_software' => 'Custom Software',
            'custom_software_desc' => 'We develop custom software for your company.',
            'personalizable_software' => 'Customizable Software',
            'personalizable_software_desc' => 'Our software is customizable and adapts to the needs of your company. You can personalize it with your branding and corporate colors.',
            'upgrade_your_business' => 'Upgrade Your Business',
            'upgrade_your_business_desc' => 'We connect your E-commerce with our software for greater scalability.',
            'discover' => 'Discover How',
            'discover_our_erp' => 'Discover Our ERP',
            'contactus' => 'Contact Us',
        ],
        'app' => [
            'title' => 'Mobile Time tracking',
            'description' => "Time tracking can be easily recorded using a mobile app. You get an up-to-date overview and  the managers are able to approve people's time.",
            'features' => [
                'start_stop' => [
                    'title' => 'Start - Stop',
                    'description' => 'Start and stop the timer with a single click.',
                ],
                'quick_overview' => [
                    'title' => 'Quick Overview',
                    'description' => 'Employees track their working time.',
                ],
                'tasks' => [
                    'title' => 'Tasks',
                    'description' => 'Check your tasks and add hours to it.',
                ],
                'customization' => [
                    'title' => 'Customization',
                    'description' => 'Linked with web version to use company colors.',
                ],
            ]
        ],
        'clients' => [
            "title" => "CLIENTS",
            "funcionality" => "CLIENTS, COMPANIES, INVOICES",
            "selector_1" => "REGISTER CLIENTS",
            "selector_1_desc" => "Add, edit, and delete clients from your database!",
            "selector_2" => "ADD COMPANIES",
            "selector_2_desc" => "Organize your clients by companies.",
            "selector_3" => "INVOICES FOR YOUR CLIENTS",
            "selector_3_desc" => "Create personalized invoices for your clients.",
            "selector_3_ul_1" => "Customized invoices",
            "selector_3_ul_2" => "Invoice tasks by hours",
            "selector_3_ul_3" => "Invoice entire project",
            "selector_4" => "DELIVERY NOTES",
            "selector_4_desc" => "Create delivery notes for your clients.",
            "selector_4_ul_1" => "Customized delivery notes",
            "selector_4_ul_2" => "Delivery materials.",
        ],
        'hr' => [
            "title" => "HUMAN RESOURCES",
            "funcionality" => "LEAVE, ATTENDANCE, VACATION...",
            "selector_1" => "APPROVE EMPLOYEE LEAVE",
            "selector_1_desc" => "Centralize and manage your employees' vacations!",
            "selector_2" => "MANAGE ATTENDANCE",
            "selector_2_desc" => "Centralize your employees' attendance and generate your own records...",
            "selector_3" => "MANAGE USERS AND PERMISSIONS",
            "selector_3_desc" => "Add, remove and edit employees.",
            "selector_3_ul_1" => "Create custom roles with permissions.",
            "selector_3_ul_2" => "Select a manager, department and time tables for your employees.",
            "selector_3_ul_3" => "Manage changing passwords.",
            "selector_4" => "CHECK YOUR HOLIDAYS",
            "selector_4_desc" => "Check your holidays in a pleasant and intuitive interface.",
        ],
        'configuration' => [
            "title" => "CONFIGURATION",
            "funcionality" => "FULL CUSTOMIZABLE",
            "selector_1" => "CUSTOM BRANDING",
            "selector_1_desc" => "Configure your company colors, logo & more!",
            "selector_2" => "ROLES",
            "selector_2_desc" => "Configure custom roles with many permissions.",
            "selector_3" => "ATTENDANCE TEMPLATES",
            "selector_3_desc" => "Create custom attendance templates to define the employees' schedule",
            "selector_3_ul_1" => "Define breaks.",
            "selector_4" => "LEAVE TYPES",
            "selector_4_desc" => "Create custom leave types for your employees.",
            "selector_4_ul_1" => "Defines the maximum days they can choose.",
        ],
        'working' => [
            "title" => "WORK SYSTEM",
            "funcionality" => "PROJECTS AND TASKS",
            "selector_3_1" => "CREATE PROJECTS",
            "selector_3_1_desc" => "Centralize and manage your employees' vacations!",
            "selector_3_1_ul_1" => "Assign users",
            "selector_3_1_ul_2" => "Limit hours for each project",
            "selector_3_1_ul_3" => "Assign project by clients and departments",
            "selector_3_2" => "TASKS",
            "selector_3_2_ul_1" => "Create tasks within projects",
            "selector_3_2_ul_2" => "Limit hours for each task",
            "selector_3_2_ul_3" => "Add files and tags to identify tasks",
            "selector_3_3" => "CANVAS MANAGEMENT",
            "selector_3_3_desc" => "Review the project and its tasks from a simple interactive canvas.",
            "selector_3_4" => "AUTOMATIC RULES",
            "selector_3_4_desc" => "Create custom rules and automate processes.",
        ],
        'inventory' => [
            "title" => "INVENTORY SYSTEM",
            "funcionality" => "ITEMS, ASSIGNMENTS AND EXPENSES",
            "selector_5_1" => "REGISTER ITEMS",
            "selector_5_1_desc" => "",
            "selector_5_1_ul_1" => "Filter by references",
            "selector_5_1_ul_2" => "Add photos to register condition",
            "selector_5_2" => "ASSIGNMENTS",
            "selector_5_2_desc" => "Assign multiple items to different users.",
            "selector_5_3" => "EXPENSES",
            "selector_5_3_desc" => "Allows you to create expenses for later invoicing or simply to record them.",
        ],
        'documents' => [
            "title" => "DOCUMENTS",
            "funcionality" => "DOCUMENTS AND E-SIGN",
            "selector_6_1" => "DOCUMENTS",
            "selector_6_1_desc" => "Upload documents and share them with your team.",
            "selector_6_1_ul_1" => "Create folders",
            "selector_6_1_ul_2" => "Share documents with your team",
            "selector_6_1_ul_3" => "Download documents",
            "selector_6_2" => "E-SIGN",
            "selector_6_2_desc" => "Sign documents electronically.",
            "selector_6_2_ul_1" => "Sign documents",
            "selector_6_2_ul_2" => "Send documents to be signed",
            "selector_6_2_ul_3" => "Download signed documents",
        ],
        'contact' => [
            "title" => "Contact",
            "description" => "The best way to contact us is by using our contact form below. Please complete all required fields and we will get back to you as soon as possible.",
            "full_name" => "Full Name",
            "email" => "Email",
            "phone_number" => "Phone Number",
            "message" => "Message",
            "submit_button" => "Submit"
        ],
        'pricing-f' => [
            "title" => "Pricing Plans",
            "description" => "Choose the perfect plan for your business needs. From startups to large enterprises, we offer flexible options to support your growth and success.",
        ],
        'about-us' => [
            'title' => 'About Us',
            'p-1' => "At WizardyLab, we specialize in the comprehensive development of custom software for your company. Our tailored approach ensures that our solutions perfectly fit your unique needs and specifications, maximizing the capabilities of a robust and efficient computer system.",
            'p-2' => "We can automate your processes, increase your company's profitability and productivity, empower your key departments, and optimize the rest. We simplify your management so that you can get the information you need with just one click. With WizardyLab, you will bring your company to the forefront of computerization and automation.",
            'p-3' => "We provide complete solutions for business management. Our ERP centralizes and automates your processes, our CRM improves your relationship with your customers and maximizes sales opportunities, and our PIM facilitates product management across multiple channels. Additionally, we develop custom software to meet the specific needs of your business, ensuring efficiency and sustainable growth. With WizardyLab, your company will have the most advanced technological tools to achieve success.",
        ],
        'services-info' => [
            'rrhh' => 'HR Software',
            'rrhh_desc' => 'Control all aspects of HR: employees, projects, tasks, materials, invoices, vacations, documents, digital signatures, performance, and much more!',
            'erp' => 'ERP Software',
            'erp_desc' => 'Modules for billing, finance, accounting, stock control, purchasing, production, intelligent warehouse management... There are no limits!',
            'crm' => 'CRM Software',
            'crm_desc' => 'Control your company online and provide tools for faster growth. Place orders from a tablet or phone and connect them with your ERP.',
            'e-commerce' => 'E-commerce',
            'e-commerce_desc' => 'Selling online has never been easier. Keep your products, prices, and stock updated in real-time without any effort.',
            'custom_software' => 'Custom Software',
            'custom_software_desc' => 'Development of custom software tailored to the unique needs of your company, improving processes and increasing productivity.',
        ]
    ],
    'departments' => [
        'title' => 'Departments',
        'title_singular' => 'Departments',
        'add_new' => 'Add new department',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'description' => 'Description',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'deliveryNotes' => [
        'title' => 'Delivery Notes',
        'title_singular' => 'Delivery Note',
        'fields' => [
            'id' => 'ID',
            'number' => 'Number',
            'generate_invoice' => 'Generate Invoice',
            'substract_stock' => 'Substact Stock',
            'issue_date' => 'Issue Date',
            'amount' => 'Amount',
            'tax' => 'Tax',
            'total' => 'Total',
            'type' => 'Type',
            'type_helper' => 'Con "Valued" se mostraran los precios en el albaran.',
            'observations' => 'Observations',
            'client' => 'Client',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
    'roles' => [
        'title' => 'Roles',
        'title_singular' => 'Role',
        'permission' => 'Permissions',
        'fields' => [
            'name' => 'Name',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
        'view_clients' => 'View clients',
        'user_view' => 'User view',
        'user_edit' => 'User edit',
        'user_delete' => 'User delete',
        'user_create' => 'User create',
        'task_view' => 'Task view',
        'task_edit' => 'Task edit',
        'task_delete' => 'Task delete',
        'task_create' => 'Task create',
        'status_view' => 'Status view',
        'status_edit' => 'Status edit',
        'status_delete' => 'Status delete',
        'status_create' => 'Status create',
        'role_view' => 'Role view',
        'role_edit' => 'Role edit',
        'role_delete' => 'Role delete',
        'role_create' => 'Role create',
        'project_view' => 'Project view',
        'project_edit' => 'Project edit',
        'project_delete' => 'Project delete',
        'project_create' => 'Project create',
        'leaveType_view' => 'LeaveType view',
        'leaveType_edit' => 'LeaveType edit',
        'leaveType_delete' => 'LeaveType delete',
        'leaveType_create' => 'LeaveType create',
        'leave_view' => 'Leave view',
        'leave_edit' => 'Leave edit',
        'leave_delete' => 'Leave delete',
        'leave_create' => 'Leave create',
        'label_view' => 'Label view',
        'label_edit' => 'Label edit',
        'label_delete' => 'Label delete',
        'label_create' => 'Label create',
        'item_view' => 'Item view',
        'item_edit' => 'Item edit',
        'item_delete' => 'Item delete',
        'item_create' => 'Item create',
        'invoice_view' => 'Invoice view',
        'invoice_edit' => 'Invoice edit',
        'invoice_delete' => 'Invoice delete',
        'invoice_create' => 'Invoice create',
        'holiday_view' => 'Holiday view',
        'holiday_edit' => 'Holiday edit',
        'holiday_delete' => 'Holiday delete',
        'holiday_create' => 'Holiday create',
        'expense_view' => 'Expense view',
        'expense_edit' => 'Expense edit',
        'expense_delete' => 'Expense delete',
        'expense_create' => 'Expense create',
        'document_view' => 'Document view',
        'document_edit' => 'Document edit',
        'document_delete' => 'Document delete',
        'document_create' => 'Document create',
        'department_view' => 'Department view',
        'department_edit' => 'Department edit',
        'department_delete' => 'Department delete',
        'department_create' => 'Department create',
        'delete_articles' => 'Delete articles',
        'create_articles' => 'Create articles',
        'configuration_view' => 'Configuration view',
        'configuration_edit' => 'Configuration edit',
        'configuration_delete' => 'Configuration delete',
        'configuration_create' => 'Configuration create',
        'company_view' => 'Company view',
        'company_edit' => 'Company edit',
        'company_delete' => 'Company delete',
        'company_create' => 'Company create',
        'client_view' => 'Client view',
        'client_edit' => 'Client edit',
        'client_delete' => 'Client delete',
        'client_create' => 'Client create',
        'attendanceTemplate_view' => 'AttendanceTemplate view',
        'attendanceTemplate_edit' => 'AttendanceTemplate edit',
        'attendanceTemplate_delete' => 'AttendanceTemplate delete',
        'attendanceTemplate_create' => 'AttendanceTemplate create',
        'attendance_view' => 'Attendance view',
        'attendance_edit' => 'Attendance edit',
        'attendance_delete' => 'Attendance delete',
        'attendance_create' => 'Attendance create',
        'assignment_view' => 'Assignment view',
        'assignment_edit' => 'Assignment edit',
        'assignment_delete' => 'Assignment delete',
        'assignment_create' => 'Assignment create',
    ],
    'holidays' => [
        'title' => 'Holidays',
        'title_singular' => 'Holiday',
        'total' => 'Total',
        'used' => 'Used',
        'available' => 'Available',
        'authorization' => 'Authorization of absences',
        'other_leaves' => 'Other leaves',
        'other_leaves_desc' => 'This is your absence history. Previous absences cannot be edited.',
        'no_prev' => "You don't have previous leaves.",
    ],
    'routes' => [
        'title' => 'Routes',
        'title_singular' => 'Route',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
        ],
    ],
];
