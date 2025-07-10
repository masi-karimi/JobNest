<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobsTableSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            // IT & Software
            [
                'title' => 'Front-End Developer',
                'description' => "Develop responsive web interfaces using HTML, CSS, JavaScript.\n- Collaborate with UI/UX designers\n- Optimize applications for speed and scalability\n- Ensure cross-browser compatibility",
                'location' => 'Kabul',
                'salary' => '40,000–60,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'TechNest Solutions',
                'user_id' => 3,
                'category_id' => 1,
                'job_type_id' => 1, // Full-time
            ],
            [
                'title' => 'Junior PHP Developer',
                'description' => "Maintain and develop backend applications using Laravel.\n- Write clean, testable code\n- Work closely with frontend team\n- Participate in code reviews",
                'location' => 'Herat',
                'salary' => '30,000–40,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'WebWorks',
                'user_id' => 3,
                'category_id' => 1,
                'job_type_id' => 1, // Full-time
            ],
            [
                'title' => 'Software Engineering Intern',
                'description' => "Assist the development team on real projects.\n- Learn modern development tools\n- Participate in daily standups\n- Gain practical coding experience",
                'location' => 'Kabul',
                'salary' => 'Stipend',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'DevStart',
                'user_id' => 3,
                'category_id' => 1,
                'job_type_id' => 3, // Internship
            ],

            // Healthcare & Medical
            [
                'title' => 'Registered Nurse',
                'description' => "Provide patient care in hospital settings.\n- Monitor patient progress\n- Administer medication\n- Coordinate with medical staff",
                'location' => 'Mazar-i-Sharif',
                'salary' => '35,000–50,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'City Hospital',
                'user_id' => 3,
                'category_id' => 2,
                'job_type_id' => 1, // Full-time
            ],
            [
                'title' => 'Medical Laboratory Technician',
                'description' => "Perform lab tests and report findings.\n- Maintain lab equipment\n- Follow safety procedures\n- Collaborate with doctors",
                'location' => 'Kabul',
                'salary' => '30,000–45,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'HealthLab',
                'user_id' => 3,
                'category_id' => 2,
                'job_type_id' => 2, // Part-time
            ],

            // Education & Training
            [
                'title' => 'High School Teacher',
                'description' => "Teach mathematics to grade 9–12 students.\n- Prepare lesson plans\n- Assess student performance\n- Participate in staff meetings",
                'location' => 'Kabul',
                'salary' => '25,000–35,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'Bright Future School',
                'user_id' => 3,
                'category_id' => 3,
                'job_type_id' => 1, // Full-time
            ],
            [
                'title' => 'English Language Instructor',
                'description' => "Teach English to adult learners.\n- Conduct classes online and in-person\n- Prepare materials\n- Track student progress",
                'location' => 'Herat',
                'salary' => '20,000–30,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'Language Center',
                'user_id' => 3,
                'category_id' => 3,
                'job_type_id' => 2, // Part-time
            ],
            [
                'title' => 'E-Learning Content Developer',
                'description' => "Create engaging e-learning modules.\n- Collaborate with subject experts\n- Use authoring tools\n- Update content based on feedback",
                'location' => 'Remote',
                'salary' => 'Negotiable',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'EduTech',
                'user_id' => 3,
                'category_id' => 3,
                'job_type_id' => 4, // Remote
            ],
            [
                'title' => 'Teaching Assistant (Internship)',
                'description' => "Assist senior teachers with classroom tasks.\n- Help prepare teaching materials\n- Support student activities\n- Learn classroom management",
                'location' => 'Kabul',
                'salary' => 'Stipend',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'Bright Future School',
                'user_id' => 3,
                'category_id' => 3,
                'job_type_id' => 3, // Internship
            ],

            // Finance & Accounting
            [
                'title' => 'Junior Accountant',
                'description' => "Assist in managing company accounts.\n- Prepare financial reports\n- Process invoices\n- Support audits",
                'location' => 'Kabul',
                'salary' => '30,000–45,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'FinanceHub',
                'user_id' => 3,
                'category_id' => 4,
                'job_type_id' => 1, // Full-time
            ],
            [
                'title' => 'Financial Analyst',
                'description' => "Analyze financial data to support decision making.\n- Build financial models\n- Present reports to management\n- Monitor market trends",
                'location' => 'Kabul',
                'salary' => '50,000–70,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'InvestPro',
                'user_id' => 3,
                'category_id' => 4,
                'job_type_id' => 1, // Full-time
            ],
            [
                'title' => 'Accounts Assistant (Part-Time)',
                'description' => "Support the accounting team with daily tasks.\n- Data entry\n- Filing documents\n- Reconcile bank statements",
                'location' => 'Herat',
                'salary' => '15,000–20,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'SmartBooks',
                'user_id' => 3,
                'category_id' => 4,
                'job_type_id' => 2, // Part-time
            ],
            [
                'title' => 'Tax Consultant (Freelance)',
                'description' => "Provide tax advice to small businesses.\n- Prepare tax filings\n- Ensure compliance\n- Answer client questions",
                'location' => 'Remote',
                'salary' => 'Per project',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'TaxPro',
                'user_id' => 3,
                'category_id' => 4,
                'job_type_id' => 5, // Freelance
            ],

            // Sales & Marketing
            [
                'title' => 'Marketing Specialist',
                'description' => "Plan and execute marketing campaigns.\n- Manage social media\n- Analyze performance metrics\n- Coordinate with sales team",
                'location' => 'Kabul',
                'salary' => '40,000–55,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'AdVision',
                'user_id' => 3,
                'category_id' => 5,
                'job_type_id' => 1, // Full-time
            ],
            [
                'title' => 'Sales Representative (Part-Time)',
                'description' => "Sell products to retail customers.\n- Meet sales targets\n- Maintain customer relationships\n- Report to manager",
                'location' => 'Mazar-i-Sharif',
                'salary' => '20,000–30,000 AFN',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'RetailMart',
                'user_id' => 3,
                'category_id' => 5,
                'job_type_id' => 2, // Part-time
            ],
            [
                'title' => 'Digital Marketing Intern',
                'description' => "Assist with online marketing tasks.\n- Schedule posts\n- Track engagement\n- Learn analytics tools",
                'location' => 'Kabul',
                'salary' => 'Stipend',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'ClickBoost',
                'user_id' => 3,
                'category_id' => 5,
                'job_type_id' => 3, // Internship
            ],
            [
                'title' => 'Social Media Manager (Remote)',
                'description' => "Manage and grow social media presence.\n- Create content calendar\n- Respond to messages\n- Monitor trends",
                'location' => 'Remote',
                'salary' => 'Negotiable',
                'vacancy' => rand(1,5),
                'experience' => rand(1,5),
                'company_name' => 'SocialHive',
                'user_id' => 3,
                'category_id' => 5,
                'job_type_id' => 4, // Remote
            ],
        ];

        Job::insert($jobs);
    }
}
