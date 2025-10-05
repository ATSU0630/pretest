// app/Http/Controllers/ContactController.php

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log; // DB保存やメール送信の代わりにログを使う場合

class ContactController extends Controller
{
    // 1. 入力ページ表示 (/)
    public function index()
    {
        return view('contact.index'); 
    }
    
    // 2. 確認ページ表示 (/confirm)
    public function confirm(Request $request)
    {
        // ① バリデーション実行
        $validated = $request->validate([
            'name'    => 'required|string|max:100', 
            'email'   => 'required|email|max:255',  
            'message' => 'required|string',         
        ]);
        
        // ② データをセッションに一時保存 (確認画面で表示するため)
        $request->session()->put('contact_data', $validated);
        
        // ③ 確認画面のビューを返す
        return view('contact.confirm', compact('validated'));
    }

    // 3. データ確定と処理 (/thanks POST)
    public function send(Request $request)
    {
        // ① セッションからデータを取得
        $data = $request->session()->get('contact_data');

        // セッション切れなどを防ぐためにデータチェック
        if (!$data) {
             return redirect()->route('contact.index')->with('error', 'セッションが切れました。最初からやり直してください。');
        }

        // ② データベースに保存
        Contact::create($data);
        
        // ③ セッションデータを削除
        $request->session()->forget('contact_data');

        // ④ サンクスページにリダイレクト (二重送信防止のためGETリダイレクト)
        return redirect()->route('contact.thanks');
    }
    
    // 4. サンクスページ表示 (/thanks GET)
    public function thanks()
    {
        return view('contact.thanks');
    }
}