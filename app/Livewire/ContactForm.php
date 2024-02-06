<?php
namespace App\Livewire;
use Livewire\Attributes\Rule; 
use Livewire\Component;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactOwnerEmail;
// use App\Notifications\InquiryUserEmail;

class ContactForm extends Component
{
  #[Rule('required')]
  public $firstname;

  #[Rule('required')]
  public $name;

  #[Rule('required', 'email')]
  public $email;

  public $phone;

  #[Rule('required')]
  public $message;

  #[Rule('required')]
  public $privacy;


  public function save()
  {
    $this->validate();
    
    $submission = FormSubmission::create(
      $this->only([
        'name', 
        'firstname',
        'email', 
        'phone',
        'message'
      ])
    );

    Notification::route('mail', env('MAIL_TO'))->notify(new ContactOwnerEmail($submission));
    session()->flash('status', 'Contact form was submitted');
    $this->reset();
    $this->render();
  }

  public function render()
  {
    return view('livewire.contact-form');
  }
}
