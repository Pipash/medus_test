<?php


namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Bulkly\SocialAccounts;
use Bulkly\SocialPostGroups;
use Bulkly\User;
use Illuminate\Support\Facades\Auth;

class NewPageController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::guard('web')->check()) {
            return redirect('/login');
        }

        $searchText = $request->input('searchText');
        $searchDate = $request->input('searchDate');
        $group = $request->input('group');
        $bufferPostings = BufferPosting::with('groupInfo', 'accountInfo');
        if (!empty($searchText)) {
            $bufferPostings = $bufferPostings->where('post_text', $searchText);
        }
        $bufferPostings = $bufferPostings->paginate(15);
        $groups = SocialPostGroups::all();
        //dd($groups[0]);
        return view('pages.new-page')->with('bufferPostings', $bufferPostings)->with('groups', $groups);
    }
}