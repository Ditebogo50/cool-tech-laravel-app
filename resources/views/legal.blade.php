<?php
function pageName($ss)
{
    if ($ss === 'tos') {
        return 'Terms of Service';
    } else {
        return 'Privacy Policy';
    }
}
?>

@extends('layouts.app')

@section('title', 'Legal')

@section('content')
    <h1>Legal: {{ pageName($subsection) }}</h1>
    @if ($subsection === 'tos')
        <p>EFFECTIVE DATE: FEBRUARY 18, 2021

            Welcome to the network of interactive services provided by CBS Interactive Inc., its affiliates or its
            subsidiaries (collectively “CBS Interactive,” “us,” or “we”). These Terms of Use (“Terms”) govern your use of
            our websites, applications, and other products and services that include an authorized link to these Terms
            (collectively, the “Services”).

            Please review these Terms carefully before using the Services because they affect your rights. By using any of
            the Services, you accept these Terms and agree to be legally bound by them.

            Please consult our Privacy Policy for Information regarding our privacy practices.

            Certain Services are provided to you free of charge, while other Services, including Paramount+ and SportsLine,
            require payment before you can access them. If you choose to subscribe to a paid Service, please also review
            such Service’s Terms of Use. For example, if you subscribe to Paramount+, please review the Paramount+
            Subscription Terms, in addition to all of the other provisions of these Terms.</p>
        <!-- etc -->
    @else
        <p>Last Modified: March 4, 2021

            This Policy describes how Paramount and its affiliates (collectively “Paramount”) collect, use and disclose
            certain information, including your Personal Information, both online and offline, and the choices you can make
            about that information.

            We are a leading global media and entertainment company that creates content and experiences for audiences
            worldwide. When you use our streaming services, mobile and online applications or other products and services of
            our brands, visit our websites, attend our live events, view our content or advertisements, or contact our
            customer service (collectively, the “Services”), we may collect information from or about you.

            Trust is a cornerstone of our mission at Paramount. We are committed to gaining and maintaining your trust by
            following a core set of privacy principles:

            Transparency – We will tell you what information we collect about you and how we use it.
            Choice – When possible, we will give you choices about how your information is collected and used.
            Access – When possible, and when required by law, we will provide you with access to the information that we
            collect about you.
            Security – We will protect your information with reasonable security measures.
            Accountability – We will take responsibility for the secure processing of your information and do our best to
            address any concerns or questions that you have about how we process your information.
            This Privacy Policy applies to all information about you that we collect in connection with the Services
            throughout the world. There may be additional notices about our information practices and choices for certain
            Paramount offerings. By using any of the Services, you acknowledge the data collection practices and purposes
            outlined in this Privacy Policy. You can learn more about Paramount and our affiliates by visiting our
            affiliates page https://www.viacomcbs.com/brands.</p>
        <!-- etc -->
    @endif
@endsection
