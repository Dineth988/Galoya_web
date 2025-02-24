<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
             overflow: hidden;
       }

        #topHalfDiv{
            
            background-image: url(https://th.bing.com/th/id/R.e154ae0ecf65b4e8cb4aa72761834b13?rik=53xMXoOkYZqaGA&pid=ImgRaw&r=0);
            background-size: cover;
            background-position: center top;
            height: 400px;                 
            
        }
        #formDiv{
            top: -780px;
            background: white;
            width: 400px;
            position: relative;
            border-radius: 20px;
            margin-left: 200px;
            padding: 30px;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.1); /* Transparent white */
            backdrop-filter: blur(20px);
           
        }
        #signUpBtn{
            background: rgba(50,19,156,255);
            color: azure;
            border: 1px;
        }
        #signUpBtn:hover{
            background-color: rgba(35, 10, 140, 255);
        }
        .bg-white {
            background-color: white;
            position: relative;
            top: -280px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.1); /* Transparent white */
            backdrop-filter: blur(20px);
        }


        .max-w-7xl {
            max-width: 80rem;
        }

        .gap-20 {
            gap: 5rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .text-3xl {
            font-size: 1.875rem;
            font-weight: 600;
            margin-left: 50px;
        }

        .text-gray-900 {
            color: #111827;
            
        }

        .text-gray-600 {
            color: #4B5563;
        }

        .text-indigo-600 {
            color: #4F46E5;
        }

        /* Spacing */
        .mt-6 {
            margin-top: 1.5rem;
            margin-left: 34px;
            
        }

        .gap-x-8 {
            column-gap: 2rem;
        }

        .gap-y-12 {
            row-gap: 3rem;
        }

        /* Image styles */
        .size-16 {
            width: 4rem;
            height: 4rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

      
        .flex {
            display: flex;
        }

        .items-center {
            align-items: center;
        }

        .gap-x-6 {
            column-gap: 1.5rem;
        }
        #teamDiv{
           
        }
    </style>
</head>
<body>
    <div>
        <div id="topHalfDiv">
        </div>
        <div id="teamDiv" style="margin-left: 900px;">
            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
                  <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Meet our leadership</h2>
                    <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
                  </div>
                  <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    <li>
                      <div class="flex items-center gap-x-6">
                        <img class="size-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div>
                          <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Leslie Alexander</h3>
                          <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                        </div>
                      </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                          <img class="size-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                          <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Leslie Alexander</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center gap-x-6">
                          <img class="size-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                          <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Leslie Alexander</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                          </div>
                        </div>
                      </li>

                  </ul>
                </div>
              </div>
              
        </div>
        <div>
           <form>
                <div id="formDiv" style="display: flex; flex-direction: column;">
                    <div>
                        <p style="font-size: large;">Welcome to Galoya products</p>
                        <h1 style="font-size: 60px; margin-top: 6px;">Sign up</h1>
                    </div>
                    <P>Enter your email</P>
                    <input type="text" style="border-radius: 10px; width: 400px;
                    height: 30px; border: 1px solid gray;">
                    <div style="display: flex; width: 400px;">
                        <div>
                            <p>Username</p>
                            <input type="text" style="width: 187px; height: 30px; border-radius: 10px; margin-right: 20px; border: 1px solid gray;">
                        </div>
                        <div>
                            <p>Contact number</p>
                            <input type="text" style="width: 187px; height: 30px; border-radius: 10px; border: 1px solid gray;">
                        </div>
                        
                    </div>
                    <p>Enter your password</p>
                    <input type="text" style="border-radius: 10px; width: 400px;
                    height: 30px; border: 1px solid gray;">
                    <button style="border-radius: 10px; width: 410px; height: 35px; margin-top: 60px;" id="signUpBtn">Sign up</button>
                </div>
           </form> 
        </div>
    </div>
    
</body>
</html>