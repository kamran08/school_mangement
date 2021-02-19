    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AdminController;

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
            
        
        


        Route::get('/firstYear', function () {
            return view('firstYear');
        });
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