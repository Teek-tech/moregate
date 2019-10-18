@component('mail::message')

# Message sent from

<strong>Name</strong> {{$data['name']}} <br>
<strong>Email</strong> {{$data['email']}} <br>
<strong>Phone</strong> {{$data['phone']}} <br>
<strong>Company</strong> {{$data['company']}} <br>

<strong>Message</strong>

{{$data['message']}}
@endcomponent
