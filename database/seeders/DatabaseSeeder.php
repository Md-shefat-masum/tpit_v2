<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Database\Seeders\Course\CourseBatchSeeder;
use Database\Seeders\Course\CourseCategorySeeder;
use Database\Seeders\Course\CourseCourseCategorySeeder;
use Database\Seeders\Course\CourseEssentialRequirementsSeeder;
use Database\Seeders\Course\CourseFaqsSeeder;
use Database\Seeders\Course\CourseForWhomsSeeder;
use Database\Seeders\Course\CourseInstructorsSeeder;
use Database\Seeders\Course\CoursejobPositionSeeder;
use Database\Seeders\Course\CourseJobWorkSeeder;
use Database\Seeders\Course\CourseModuleClassExamsSeeder;
use Database\Seeders\Course\CourseModuleClassSeeder;
use Database\Seeders\Course\CourseModulesAtAGlancesSeeder;
use Database\Seeders\Course\CourseModulesSeeder;
use Database\Seeders\Course\CourseModuleTaskCompleteByUsersSeeder;
use Database\Seeders\Course\CourseSeeder;
use Database\Seeders\Course\CourseWhatYouWillGetSeeder;
use Database\Seeders\Course\CourseWhyYouLearnFromUsSeeder;
use Database\Seeders\Course\CourseYouWillLearnsSeeder;
use Database\Seeders\Course\CourseModuleClassQuizesSeeder;
use Database\Seeders\Course\CourseModuleClassResoursesSeeder;
use Database\Seeders\Course\CourseModuleClassRoutinesSeeder;
use Database\Seeders\User\UserSocialLinksSeeder;
use Database\Seeders\User\UserContactNumberSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            // ExtraUserSeeder::class,
            ContactMessageSeeder::class,
            UserContactNumberSeeder::class,
            UserSocialLinksSeeder::class,

            CourseCategorySeeder::class,
            CourseSeeder::class,
            CourseInstructorsSeeder::class,
            CourseCourseCategorySeeder::class,
            CourseBatchSeeder::class,
            
            CourseEssentialRequirementsSeeder::class,
            CourseFaqsSeeder::class,
            CourseForWhomsSeeder::class,
            CoursejobPositionSeeder::class,
            CourseJobWorkSeeder::class,
            CourseWhatYouWillGetSeeder::class,
            CourseWhyYouLearnFromUsSeeder::class,
            CourseYouWillLearnsSeeder::class,

            CourseModulesSeeder::class,
            CourseModuleClassExamsSeeder::class,
            CourseModuleClassQuizesSeeder::class,
            CourseModuleClassResoursesSeeder::class,
            CourseModuleClassRoutinesSeeder::class,
            CourseModuleClassSeeder::class,
            CourseModulesAtAGlancesSeeder::class,
            CourseModuleTaskCompleteByUsersSeeder::class,

            

        ]);


    }
}
