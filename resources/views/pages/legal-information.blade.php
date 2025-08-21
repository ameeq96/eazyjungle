@extends('layouts.default')
@section('title', 'Legal Information')
@section('content')

<section class="py-5">
    <div class="container">
        <h1>Legal Information</h1>
        <p>
            This page outlines important legal information regarding our company, services, and the terms under which we operate. 
            By using our website or services, you agree to the following statements and policies.
        </p>

        <h3>1. Company Registration Details</h3>
        <p>
            Our company is duly registered and operates under the applicable laws of its jurisdiction.  
            <br><strong>Registered Name:</strong> Eazy Jungle  
        </p>

        <h3>2. Licensing Information</h3>
        <p>
            We comply with all licensing requirements applicable to our industry.  
            Any software, tools, or services provided through our platform are properly licensed.  
            Unauthorized reproduction or distribution of our intellectual property is strictly prohibited.  
        </p>

        <h3>3. Disclaimers and Limitations of Liability</h3>
        <p>
            - The information provided on this website is for general informational purposes only.  
            - While we strive to keep all content accurate and up to date, we do not guarantee completeness or reliability.  
            - We are not liable for any damages resulting from the use of our website, services, or third-party links.  
        </p>

        <h3>4. Intellectual Property Rights</h3>
        <p>
            All logos, trademarks, designs, and content displayed on this website are the property of Eazy Jungle.  
            Users may not copy, reproduce, or use our intellectual property without prior written consent.  
        </p>

        <h3>5. Privacy and Data Protection</h3>
        <p>
            We are committed to protecting user privacy and handling all personal data in accordance with applicable data protection laws.  
            For more details, please review our <a href="{{route('privacy-policy')}}">Privacy Policy</a>.  
        </p>

        <h3>6. Governing Law</h3>
        <p>
            These terms and any disputes arising from the use of this website will be governed by and construed in accordance with the laws of Pakistan.  
        </p>
    </div>
</section>

@stop
