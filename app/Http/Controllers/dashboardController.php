 <?php 
 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\dashboardModel;
use App\bidangModel;

class dashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        
    }
	public function index(){
		$datas3 = bidangModel::get();
        return view('setting',compact('datas3'));       
	}

	public function create(){
		$datas3 = bidangModel::get();
        return view('setting',compact('datas3'));       
	}
	public function store(Request $request ){
	
        $this->validate($request,[
            'waktuSaintek' => ['required'],
            'waktuSoshum' => ['required'],
            'opsiSaintek' => ['required'],
            'opsiSoshum' => ['required'], 
        ]);

        bidangModel::where('id_bidang','=','1')->update([
             	'waktu' => $request->get('waktuSaintek'),
                'status' => $request->get('opsiSaintek'),
                ]);
        bidangModel::where('id_bidang','=','2')->update([
             	'waktu' => $request->get('waktuSoshum'),
                'status' => $request->get('opsiSoshum'),
                ]);
      // alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect()->route('setting.create');
	}        
}
