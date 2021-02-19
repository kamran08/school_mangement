    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\StudentController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */




    Route::get('/', function () {
        return view('index');
    });
    Route::get('/login', function () {
        return view('login');
    });
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::post('/loginApi', [AdminController::class, 'loginApi']);
    Route::get('/about', function () {
        return view('about');
    });
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });
        // group 
        Route::get('/addGroup', function () {
            return view('group.add');
        });
        Route::get('/group', [AdminController::class, 'getGroups']);
        Route::post('/addGroupApi', [AdminController::class, 'addGroupApi']);
        Route::post('/editGroupapi', [AdminController::class, 'editGroupapi']);
        Route::get('/editGroup/{id}', [AdminController::class, 'editGroupsPage']);
        Route::get('/deleteGroup/{id}', [AdminController::class, 'deleteGroup']);
        
        // Route::get('/group/{id}', [AdminController::class, 'editGroupsPage']);
        // section
        Route::get('/sections/{id}', [AdminController::class, 'getSection']);
        Route::get('/getSectionById/{id}', [AdminController::class, 'getSectionById']);
        
        Route::post('/addSectionApi', [AdminController::class, 'addSectionApi']);
        Route::get('/addSectionView', [AdminController::class, 'addSectionView']);
        Route::get('/deleteSection/{id}', [AdminController::class, 'deleteSection']);
        Route::get('/editSection/{id}', [AdminController::class, 'editSection']);
        Route::get('/editSectionApi', [AdminController::class, 'editSectionApi']);

        // subject
        Route::get('/subject/{id}', [AdminController::class, 'subjectByGroupId']);
        Route::get('/subject', [AdminController::class, 'subject']);
        Route::get('/addSubject', [AdminController::class, 'addSubject']);
        Route::post('/addSubjectApi', [AdminController::class, 'addSubjectApi']);
        Route::get('/deleteSubject/{id}', [AdminController::class, 'deleteSubject']);
        
        // student list
        Route::get('/student/{key}', [StudentController::class, 'getStudents']);
        Route::get('/students/add', [StudentController::class, 'studentAdd']);
        Route::post('/addStudentApi', [StudentController::class, 'addStudentApi']);
        Route::get('/deleteStudent/{id}', [StudentController::class, 'deleteStudent']);
        
        Route::get('/secondYear', function () {
            return view('secondYear');
        });
       
        Route::get('/editStudent', function () {
            return view('editStudent');
        });
       
        Route::get('/login', function () {
        return view('login');
        });
        
        Route::get('/exam', function () {
            return view('exam');
        });
    });