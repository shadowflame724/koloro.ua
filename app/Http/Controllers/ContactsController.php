<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
    public function getContacts()
    {
        $page = Page::find(6);
        $managers = Manager::with('image')->orderBy('order_by', 'DESC')
            ->get();

        return view('client.contacts', [
            'page' => $page,
            'managers' => $managers
        ]);
    }
}
