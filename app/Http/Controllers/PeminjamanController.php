<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Peminjaman;
use App\peminjamanGallery;
use Yajra\Datatables\Facades\Datatables;



class PeminjamanController extends Controller
{
    public function __construct(Peminjaman $model)
    {

    }

    public function index(Request $request)
    {
        $data['pinjam']= DB::table('peminjaman')
                        ->select('peminjaman.*','member.nama as name')
                        ->join('member','peminjaman.member_barcode','=','member.barcode')
                        ->orderBy('peminjaman.updated_at','desc')
                        ->get();
    	return view('admin.peminjaman.index',$data);
   	}

    public function create()
    {
        return view('admin.peminjaman.create');
    }

    public function store(Request $data)
    {
        $pinjam = new Peminjaman;
        $pinjam->member_barcode= $data['member_barcode'];
        $pinjam->tgl_pinjam    = $data['tgl_pinjam'];
        $pinjam->tgl_kembali   = $data['tgl_kembali'];
        $pinjam->save();
        for ($i=0; $i < count($data->buku_barcode) ; $i++) { 
            $pinjamGallery = peminjamanGallery::create([
                'peminjaman_id' => $pinjam->id,
                'buku_barcode' => $data->buku_barcode[$i]
            ]);
        }
        return redirect()->route('admin-index-peminjaman');
    }

   	public static function datatables(Request $request)
    {

        $peminjaman = Peminjaman::select('*')->get();
        return Datatables::of($peminjaman)->make(true);
        // if($request->ajax()){
        // $peminjaman = DB::table('peminjaman')->select('peminjaman.*')->get();
        // return Datatables::of($peminjaman)
       	// 		->addColumn('action', function ($peminjaman) {
        //             $url = route('admin-edit-peminjaman',$peminjaman->id);
        //             $showUrl = route('admin-show-peminjaman',$peminjaman->id);
        //             return '<a href="'.$url.'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i></a>&nbsp;<a href="#" class="btn btn-danger btn-xs actDelete" title="Delete" data-id="'.$peminjaman->id.'" data-name="'.$peminjaman->company.'" data-button="delete"><i class="fa fa-trash-o fa-fw"></i></a>&nbsp;<a href="'.$showUrl.'" class="btn btn-info btn-xs actShow" title="Show Detail" data-id="'.$peminjaman->id.'" data-name="'.$peminjaman->company.'" data-button="show"><i class="fa fa-search fa-fw"></i></a>&nbsp;<a href="#" class="btn btn-success btn-xs actApprove" title="Approval Directory" data-id="'.$peminjaman->id.'" data-name="'.$peminjaman->company.'" data-button="approve"><i class="fa fa-thumbs-up fa-fw"></i></a>';
        //         })
        //         ->order(function ($peminjaman) {
        //             $peminjaman->orderBy('updated_at','desc');
        //         })
        //         ->make(true);
        // }else {
        //     exit("Not an AJAX request -_-");
        // }
            
    }

}
   	// public function data(Request $request){   
    //     // if($request->ajax()){
    //         $users = DB::table('users')
    //                 ->leftJoin('skills','users.id','=','skills.id')
    //                 ->rightJoin('positions','skills.id','=','positions.id')
    //                 ->join('education','positions.id','=','education.id')
    //                 // ->groupBy('users.id')
    //                 ->get();
    //         //dd($users);
    //         return Datatables::of($users)
    //                 // // tambah kolom untuk aksi edit dan hapus
    //                 ->addColumn('action', function($users){
    //                 return 
    //                 '<div class="resume-action">
    //                     <div class="dropdown">
    //                       <button id="moreAct" type="button" class="btn-clean" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    //                         View more
    //                         <span class="caret"></span>
    //                       </button>
    //                       <ul class="dropdown-menu" aria-labelledby="moreAct">
    //                         <li>
    //                           <a target="_blank" href="'.url('view/'.$users->id).'" class="btn btn-sm"><i class="mdi mdi-eye"></i> View</a>
    //                         </li>
    //                         <li>
    //                           <a data-method="delete" href="'.url('view/'.$users->id).'" class="btn btn-sm" onclick="alertd()"><i class="mdi mdi-recycle"></i> delete</a>
    //                             </li>
    //                             <li>
    //                             <a target="_blank" href="'.url('pdf/'.$users->id).'" class="btn btn-sm"><i class="mdi mdi-file-pdf"></i> Export to PDF</a>
    //                             </li>
    //                         </ul>
    //                     </div>
    //                 </div>';
    //                 })
    //                 // ->addColumn('thumb',function($users){
    //                     // return '
    //                     // <div class="resume-detail">
    //                         // <img src="'.asset('images/'.$users->image).'" alt="username resume" class="img-responsive"/>
    //                     // </div>';
    //                 // })
    //                 ->addColumn('status',function($users){
    //                     if($users->status == "Active"){
    //                         return '
    //                             <form action="'.url('/home/'.$users->id).'" method="POST">
    //                                 <input type="hidden" name="_token" value="'.csrf_token().'">
    //                                 <input type="hidden" name="_method" value="PUT">
    //                                 <input type="hidden" name="name" value="'.$users->name.'">
    //                                 <input type="hidden" name="address" value="'.$users->address.'">
    //                                 <input type="hidden" name="status" value="Not Active">
    //                                 <td data-label="Status"><center><button type="submit" class="btn btn-success btn-xs">'.$users->status.'</button></center></td>
    //                             </form>';
    //                     }elseif($users->status == "Not Active"){
    //                         return '
    //                             <form action="'.url('/home/'.$users->id).'" method="POST">
    //                                 <input type="hidden" name="_token" value="'.csrf_token().'">
    //                                 <input type="hidden" name="_method" value="PUT">    
    //                                 <input type="hidden" name="name" value="'.$users->name.'">
    //                                 <input type="hidden" name="address" value="'.$users->address.'">
    //                                 <input type="hidden" name="status" value="Active">
    //                                 <td data-label="Status"><center><button type="submit" class="btn btn-danger btn-xs">'.$users->status.'</button></center></td>
    //                                 </form>';
    //                             }
    //                 })
    //                 ->rawColumns(['thumb','action','status'])
    //                 ->make(true);
    //     // } else {
    //     //     exit("Not an AJAX request -_-");
    //     // }
    // }
