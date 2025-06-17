<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact/index');
    }

    public function submit()
    {
        // Handle form submission
        if ($this->request->getMethod() === 'post') {
            // Add validation rules
            $rules = [
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email',
                'subject' => 'required|min_length[5]',
                'message' => 'required|min_length[10]'
            ];

            if ($this->validate($rules)) {
                // Process the form data
                // You can add email sending logic here
                return redirect()->to(base_url('contact'))->with('success', 'Thank you for your message. We will get back to you soon!');
            } else {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }

        return redirect()->back();
    }
}
