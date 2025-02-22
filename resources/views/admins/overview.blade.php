@extends('layouts.onboard')

@section('content')
  <article >
      <div class="flex items-center justify-between p-4">
          <div>
              <div class="border bg-white border-slate-300 p-4 rounded-md h-6 flex items-center gap-x-2">
                  <i class="lni lni-alarm " ></i>
                  Last updated : Feb 28, 2024
              </div>
          </div>
          <div>
              <div class="flex gap-x-2">
                  <button class="border border-slate-300 p-2 rounded-md  h-10  flex items-center gap-x-2">
                      <i class="lni lni-thumbs-down " ></i>
                      filtrer
                  </button>
                  <button class="bg-blue-600 shadow-sm  p-2 rounded-md h-10 text-white ">
                      <i class="lni lni-download " ></i>
                      Import/Export
                  </button>
              </div>
          </div>
      </div>
      <div>
          <div class="flex items-center justify-between m-4">
            <div class=" shadow-sm bg-white border border-slate-300 rounded-lg w-96">
                <div class="p-4">
                    <div class=" p-4 flex items-center h-10 w-10 justify-center  border border-slate-300 rounded-lg">
                        <i class="lni lni-database " style="color: blue"></i>
                    </div>

                    <div class="mt-5 flex justify-between items-end">
                        <div>
                            <div class="flex flex-col">
                                <span class="text-gray-400 text-sm">Total Sales</span>
                                <span class="font-bold text-xl">$20,5639</span>
                            </div>
                        </div>
                        <div>
                            <div class="rounded-full border flex justify-center items-center border-slate-300 h-6 w-6">

                                <i class="lni lni-arrow-up " style="color: blue ; font-size: 12px"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t  border-slate-300">
                    <div class="flex justify-between px-2 py-2">
                        <div>
                            <i class="lni lni-arrow-up " style=" font-size: 12px;color: teal"></i>
                            <span style="color: teal;font-weight: bold">10,5%</span>
                        </div>
                        <div>
                            <span class="text-gray-400 text-sm">from last period</span>
                        </div>
                    </div>
                </div>
            </div>

              <div class="shadow-sm bg-white  border border-slate-300 rounded-lg w-96">
                  <div class="p-4">
                      <div class=" p-4 flex items-center h-10 w-10 justify-center  border border-slate-300 rounded-lg">
                          <i class="lni lni-users " style="color: blue"></i>
                      </div>

                      <div class="mt-5 flex justify-between items-end">
                          <div>
                              <div class="flex flex-col">
                                  <span class="text-gray-400 text-sm">Total Sales</span>
                                  <span class="font-bold text-xl">$20,5639</span>
                              </div>
                          </div>
                          <div>
                              <div class="rounded-full border flex justify-center items-center border-slate-300 h-6 w-6">

                                  <i class="lni lni-arrow-up " style="color: blue ; font-size: 12px"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="border-t  border-slate-300">
                      <div class="flex justify-between px-2 py-2">
                          <div>
                              <i class="lni lni-arrow-up " style=" font-size: 12px;color: teal"></i>
                              <span style="color: teal;font-weight: bold">10,5%</span>
                          </div>
                          <div>
                              <span class="text-gray-400 text-sm">from last period</span>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="shadow-sm  bg-white border border-slate-300 rounded-lg w-96">
                  <div class="p-4">
                      <div class=" p-4 flex items-center h-10 w-10 justify-center  border border-slate-300 rounded-lg">
                          <i class="lni lni-bar-chart " style="color: blue"></i>
                      </div>

                      <div class="mt-5 flex justify-between items-end">
                          <div>
                              <div class="flex flex-col">
                                  <span class="text-gray-400 text-sm">Total Sales</span>
                                  <span class="font-bold text-xl">$20,5639</span>
                              </div>
                          </div>
                          <div>
                              <div class="rounded-full border flex justify-center items-center border-slate-300 h-6 w-6">

                                  <i class="lni lni-arrow-up " style="color: blue ; font-size: 12px"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="border-t  border-slate-300">
                      <div class="flex justify-between px-2 py-2">
                          <div>
                              <i class="lni lni-arrow-up " style=" font-size: 12px;color: teal"></i>
                              <span style="color: teal;font-weight: bold">10,5%</span>
                          </div>
                          <div>
                              <span class="text-gray-400 text-sm">from last period</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class=" shadow-sm border bg-white border-slate-300 rounded-lg w-96">
                  <div class="p-4">
                      <div class=" p-4 flex items-center h-10 w-10 justify-center  border border-slate-300 rounded-lg">
                          <i class="lni lni-user " style="color: blue"></i>
                      </div>

                      <div class="mt-5 flex justify-between items-end">
                          <div>
                              <div class="flex flex-col">
                                  <span class="text-gray-400 text-sm">Total Sales</span>
                                  <span class="font-bold text-xl">$20,5639</span>
                              </div>
                          </div>
                          <div>
                              <div class="rounded-full border flex justify-center items-center border-slate-300 h-6 w-6">

                                  <i class="lni lni-arrow-up " style="color: blue ; font-size: 12px"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="border-t  border-slate-300">
                      <div class="flex justify-between px-2 py-2">
                          <div>
                              <i class="lni lni-arrow-up " style=" font-size: 12px;color: teal"></i>
                              <span style="color: teal;font-weight: bold">10,5%</span>
                          </div>
                          <div>
                              <span class="text-gray-400 text-sm">from last period</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </article>
  <article>
      <div class="m-4">

          <div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
              <div class="flex justify-between">
                  <div>
                      <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">32.4k</h5>
                      <p class="text-base font-normal text-gray-500 dark:text-gray-400">Users this week</p>
                  </div>
                  <div
                      class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                      12%
                      <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                      </svg>
                  </div>
              </div>
              <div id="area-chart"></div>
              <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                  <div class="flex justify-between items-center pt-5">
                      <!-- Button -->
                      <button
                          id="dropdownDefaultButton"
                          data-dropdown-toggle="lastDaysdropdown"
                          data-dropdown-placement="bottom"
                          class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                          type="button">
                          Last 7 days
                          <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                          </svg>
                      </button>
                      <!-- Dropdown menu -->
                      <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                              <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                              </li>
                              <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                              </li>
                              <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                              </li>
                              <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                              </li>
                              <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                              </li>
                          </ul>
                      </div>
                      <a
                          href="#"
                          class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                          Users Report
                          <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                      </a>
                  </div>
              </div>
          </div>

      </div>
  </article>
    <article class="mt-8">
        <div class="flex gap-x-4  m-4">
           <div class="w-2/3 rounded-lg p-4 bg-white border border-slate-300 ">
               <div class="flex justify-between items-center">
                    <div>
                        <div class="font-bold">
                            <i class="lni lni-user " ></i>
                            Contacts
                        </div>
                    </div>
                   <div class="flex gap-x-4">
                       <form class="w-auto mx-auto">
                           <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                           <div class="relative">
                               <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                   <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                   </svg>
                               </div>
                               <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required />

                           </div>
                       </form>
                       <div class=" p-4 flex items-center h-10 w-10 justify-center  border border-slate-300 rounded-lg">
                           <i class="lni lni-bi-cycle " ></i>
                       </div>
                   </div>
               </div>
               <div >


                   <br>
                   <div class="relative overflow-x-auto">
                       <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                           <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                           <tr>
                               <th scope="col" class="px-6 py-3">

                                   Product name
                               </th>
                               <th scope="col" class="px-6 py-3">
                                   Color
                               </th>
                               <th scope="col" class="px-6 py-3">
                                   Category
                               </th>
                               <th scope="col" class="px-6 py-3">
                                   Price
                               </th>
                           </tr>
                           </thead>
                           <tbody>
                           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                               <th scope="row" class="px-6 py-4 font-medium flex items-center gap-x-2 text-gray-900 whitespace-nowrap dark:text-white">
                                   <div class="flex -space-x-4 rtl:space-x-reverse">
                                       <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('/dist/images/profile-1.jpg')}}" alt="">

                                       <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
                                   </div>
                                   Apple MacBook Pro 17"
                               </th>
                               <td class="px-6 py-4">
                                   Silver
                               </td>
                               <td class="px-6 py-4">
                                   Laptop
                               </td>
                               <td class="px-6 py-4">
                                   <div class="flex gap-x-2">
                                       <div class=" p-4 flex items-center h-10 w-10 justify-center cursor-pointer border border-slate-300 rounded-lg">
                                           <i class="lni lni-phone " ></i>
                                       </div>

                                       <div class=" p-4 flex items-center h-10 w-10 justify-center cursor-pointer border border-slate-300 rounded-lg">
                                           <i class="lni lni-chef-hat " ></i>
                                       </div>
                                   </div>
                               </td>
                           </tr>
                           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                               <th scope="row" class="px-6 py-4 font-medium flex items-center gap-x-2 text-gray-900 whitespace-nowrap dark:text-white">
                                   <div class="flex -space-x-4 rtl:space-x-reverse">
                                       <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('/dist/images/profile-1.jpg')}}" alt="">

                                       <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
                                   </div>
                                   Apple MacBook Pro 17"
                               </th>
                               <td class="px-6 py-4">
                                   Silver
                               </td>
                               <td class="px-6 py-4">
                                   Laptop
                               </td>
                               <td class="px-6 py-4">
                                   <div class="flex gap-x-2">
                                       <div class=" p-4 flex items-center h-10 w-10 justify-center cursor-pointer border border-slate-300 rounded-lg">
                                           <i class="lni lni-phone " ></i>
                                       </div>

                                       <div class=" p-4 flex items-center h-10 w-10 justify-center cursor-pointer border border-slate-300 rounded-lg">
                                           <i class="lni lni-chef-hat " ></i>
                                       </div>
                                   </div>
                               </td>
                           </tr>
                           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                               <th scope="row" class="px-6 py-4 font-medium flex items-center gap-x-2 text-gray-900 whitespace-nowrap dark:text-white">
                                   <div class="flex -space-x-4 rtl:space-x-reverse">
                                       <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('/dist/images/profile-1.jpg')}}" alt="">

                                       <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
                                   </div>
                                   Apple MacBook Pro 17"
                               </th>
                               <td class="px-6 py-4">
                                   Silver
                               </td>
                               <td class="px-6 py-4">
                                   Laptop
                               </td>
                               <td class="px-6 py-4">
                                   <div class="flex gap-x-2">
                                       <div class=" p-4 flex items-center h-10 w-10 justify-center cursor-pointer border border-slate-300 rounded-lg">
                                           <i class="lni lni-phone " ></i>
                                       </div>

                                       <div class=" p-4 flex items-center h-10 w-10 justify-center cursor-pointer border border-slate-300 rounded-lg">
                                           <i class="lni lni-chef-hat " ></i>
                                       </div>
                                   </div>
                               </td>
                           </tr>
                           </tbody>
                       </table>
                   </div>






               </div>
           </div>
            <div class="bg-white w-1/3 rounded-lg border border-slate-300 ">
                <div class="flex justify-between items-center border-b border-gray-200 p-4">
                    <div>
                       <div class="flex items-center gap-x-2">
                           <div class=" p-4 flex items-center h-10 w-10  justify-center cursor-pointer border border-slate-300 rounded-lg">
                               <i class="lni lni-checkmark " ></i>
                           </div>
                           <span>My Tasks</span>
                       </div>
                    </div>
                    <div class=" p-4 flex items-center h-10 w-10  justify-center cursor-pointer border border-slate-300 rounded-lg">
                        <i class="lni lni-plus " ></i>
                    </div>
                </div>
                <div class="mt-4 p-4 flex justify-center">
                    <div class="flex flex-col gap-y-3 w-full">
                        <div class="bg-white w-full rounded-lg p-4 border border-slate-300">
                            <div class="flex  gap-x-4 items-start ">
                                <div>
                                    <input type="radio">
                                </div>
                                <div class="flex flex-col items-start">
                                    <span class="font-bold">New social media post</span>
                                    <span class="text-gray-400">Sdi mycrophone</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <div class="flex gap-x-4">
                                            <i class="lni lni-calendar"></i>
                                            Feb 12
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex gap-x-4">
                                            <div class="rounded-lg px-2 py-1 text-sm text-blue font-bold bg-gray-200">
                                                Marketing
                                            </div>
                                            <div class="rounded-lg px-2 py-1 text-sm  text-blue-600 bg-blue-600  bg-gray-200">
                                                Internal
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white w-full rounded-lg p-4 border border-slate-300">
                            <div class="flex  gap-x-4 items-start ">
                                <div>
                                    <input type="radio">
                                </div>
                                <div class="flex flex-col items-start">
                                    <span class="font-bold">New social media post</span>
                                    <span class="text-gray-400">Sdi mycrophone</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <div class="flex gap-x-4">
                                            <i class="lni lni-calendar"></i>
                                            Feb 12
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex gap-x-4">
                                            <div class="rounded-lg px-2 py-1 text-sm text-blue font-bold bg-gray-200">
                                                Marketing
                                            </div>
                                            <div class="rounded-lg px-2 py-1 text-sm  text-blue-600 bg-blue-600  bg-gray-200">
                                                Internal
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </article>

@endsection
