<p>Dear {{ $user->name }},</p>

<p> Your account has been added as an admin.</p>

<p>Here are your account details:</p>
<ul>
    <li>Email: {{ $user->email }}</li>
    <li>Password: {{ $password }}</li>
</ul>

<p>Feel free to login to our application using your email and password.</p>
