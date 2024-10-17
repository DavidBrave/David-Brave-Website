<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>

    
    <style>
        /* Global Style */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            background-color: #121212; /* Dark background */
            color: #ffffff; /* Light text color */
            font-family: Arial, sans-serif; /* Font style */
            line-height: 1.6; /* Better readability */
            display: flex;
            justify-content: center; /* Center horizontally */
            min-height: 100vh; /* Full viewport height */
        }

        /* Main Container Styles */
        .main-container {
          max-width: 800px; /* Max width for content */
          width: 100%; /* Full width for responsiveness */
          padding: 20px; /* Padding for top and bottom */
          padding-left: 15px; /* Left padding */
          padding-right: 15px; /* Right padding */
          text-align: left; /* Align text to the left */
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            color: #ffffff; /* Ensure headings are light */
        }

        p {
            color: #e0e0e0; /* Softer color for paragraph text */
            margin-bottom: 1em; /* Space between paragraphs */
        }

        /* Links */
        a {
            color: #bb86fc; /* Light purple for links */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Buttons */
        button {
            background-color: #1f1f1f; /* Dark button background */
            color: #ffffff; /* Light button text */
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            display: inline-block; /* Ensure buttons are inline */
        }

        button:hover {
            background-color: #333333; /* Darker background on hover */
        }

        /* Responsive Media Queries */
        @media (max-width: 768px) {
            .main-container {
                padding: 10px;
            }

            h1 {
                font-size: 2em;
            }

            h2 {
                font-size: 1.5em;
            }
        }

        /* Additional Element Styles */
        input, textarea {
            background-color: #1f1f1f; /* Dark input fields */
            color: #ffffff; /* Light text in input fields */
            border: 1px solid #333333; /* Border for inputs */
            padding: 10px;
            border-radius: 5px;
            width: 100%; /* Full width for inputs */
            margin-bottom: 1em; /* Space between inputs */
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #bb86fc; /* Highlight border on focus */
        }



        .icon-container {
            display: flex; /* Use flexbox layout */
            justify-content: space-around; /* Space icons evenly */
            align-items: center; /* Center icons vertically */
            padding: 20px; /* Padding around the container */
        }

        .icon {
            margin: 0 10px; /* Space between icons */
            fill: #EEEEEE; /* Color for the icons, adjust as needed */
            transition: transform 0.3s; /* Optional hover effect */
        }



        .divider {
            width: 100%; /* Full width for the divider line */
            height: 2px; /* Height of the divider line */
            background-color: #ccc; /* Color of the divider line */
        }


    </style>


</head>
<body>
    

    <div class="main-container">

        <br>
        <div class="divider"></div>
        <br>

        <h1>Hello, I am Brave</h1>
        <br>
        <p>This is a simple landing page to test the responsiveness of the page, the routing of the framework, and the deployment test of the hosting server.</p>
        <p>Well, I guess also how bad my web programming is, but it is a proven fact. So, no need for that.</p>

        <button onclick="alert(new Date())" type="button">
            Random Button
        </button>
        <br>
        <br>


        <div class="icon-container">
            <a class="icon" href="https://github.com/DavidBrave/Brave-Website">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#ffffff"  class="icon icon-tabler icons-tabler-filled icon-tabler-brand-github"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5.315 2.1c.791 -.113 1.9 .145 3.333 .966l.272 .161l.16 .1l.397 -.083a13.3 13.3 0 0 1 4.59 -.08l.456 .08l.396 .083l.161 -.1c1.385 -.84 2.487 -1.17 3.322 -1.148l.164 .008l.147 .017l.076 .014l.05 .011l.144 .047a1 1 0 0 1 .53 .514a5.2 5.2 0 0 1 .397 2.91l-.047 .267l-.046 .196l.123 .163c.574 .795 .93 1.728 1.03 2.707l.023 .295l.007 .272c0 3.855 -1.659 5.883 -4.644 6.68l-.245 .061l-.132 .029l.014 .161l.008 .157l.004 .365l-.002 .213l-.003 3.834a1 1 0 0 1 -.883 .993l-.117 .007h-6a1 1 0 0 1 -.993 -.883l-.007 -.117v-.734c-1.818 .26 -3.03 -.424 -4.11 -1.878l-.535 -.766c-.28 -.396 -.455 -.579 -.589 -.644l-.048 -.019a1 1 0 0 1 .564 -1.918c.642 .188 1.074 .568 1.57 1.239l.538 .769c.76 1.079 1.36 1.459 2.609 1.191l.001 -.678l-.018 -.168a5.03 5.03 0 0 1 -.021 -.824l.017 -.185l.019 -.12l-.108 -.024c-2.976 -.71 -4.703 -2.573 -4.875 -6.139l-.01 -.31l-.004 -.292a5.6 5.6 0 0 1 .908 -3.051l.152 -.222l.122 -.163l-.045 -.196a5.2 5.2 0 0 1 .145 -2.642l.1 -.282l.106 -.253a1 1 0 0 1 .529 -.514l.144 -.047l.154 -.03z" /></svg>
            </a>
            <a class="icon" href="mailto:davidbrave244@gmail.com">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" /><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" /></svg>
            </a>
            <a class="icon" href="https://www.youtube.com/@DavidBrave244">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-brand-youtube"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-12a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-9 6v6a1 1 0 0 0 1.514 .857l5 -3a1 1 0 0 0 0 -1.714l-5 -3a1 1 0 0 0 -1.514 .857z" /></svg>
            </a>
            <a class="icon" href="www.linkedin.com/in/davidbrave">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EEEEEE" stroke="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
            </a>
        </div>

        <br>
        <div class="divider"></div>
        <br>

    </div>
</body>
</html>