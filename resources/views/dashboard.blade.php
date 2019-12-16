@extends('layouts.app')

@section('content')
    <div class="flex items-center mt-12">
        <div class="w-full">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <div class="flex-grow container mx-auto pt-6 pb-8">
                <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
                  <div class="border-b px-6">
                    <div class="flex justify-between -mb-px">
                      <div class="lg:hidden text-blue-dark py-4 text-lg">
                        Statistiques
                      </div>
                      <div class="hidden lg:flex">
                        <h1 class="appearance-none py-4 text-blue-dark border-b border-blue-dark mr-6">
                            Dashboard Stats
                        </h1>
                      </div>
                    </div>
                  </div>
                  <div class="flex items-center px-6 lg:hidden">
                    <div class="flex-grow flex-no-shrink py-6">
                      <div class="text-grey-darker mb-2">
                        <span class="text-5xl">3500</span>
                      </div>
                    </div>
                    <div class="flex-shrink flex items-center justify-between w-32">
                      <select id="states" class="block appearance-none w-full bg-white border border-grey-light px-4 py-2 pr-8 rounded">
                        <option>Inserts</option>
                        <option>Templates</option>
                        <option>Available</option>
                      </select>
                    </div>
                  </div>
                  <div class="hidden lg:flex">
                    <div class="w-1/3 text-center py-8">
                      <div class="border-r">
                        <div class="text-grey-darker mb-2">
                          <span class="text-5xl">3500</span>
                        </div>
                        <div class="text-sm uppercase text-grey tracking-wide">
                          Inserts
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3 text-center py-8">
                      <div class="border-r">
                        <div class="text-grey-darker mb-2">
                          <span class="text-5xl">3000</span>
                        </div>
                        <div class="text-sm uppercase text-grey tracking-wide">
                          Clients
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3 text-center py-8">
                      <div>
                        <div class="text-grey-darker mb-2">
                          <span class="text-5xl">250</span>
                        </div>
                        <div class="text-sm uppercase text-grey tracking-wide">
                          Available
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                  <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col">
                    <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
                      <div class="border-b">
                        <div class="flex justify-between px-6 -mb-px">
                          <h3 class="text-blue-dark py-4 font-normal text-lg">Your channels</h3>
                        </div>
                      </div>
                      <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
                        <div class="w-2/5 xl:w-1/4 px-4 flex items-center">
                          <div class="rounded-full bg-orange inline-flex mr-3">
                            


                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 493.728 493.728" class="h-8 w-8 block"><path d="M404.936 92.136c-1.768-.168-39.52-2.968-39.52-2.968S339.176 63 336.304 60.12c-2.88-2.896-8.504-2.032-10.696-1.368-.312.088-5.72 1.776-14.672 4.536-8.768-25.336-24.216-48.616-51.408-48.616-.752 0-1.528.032-2.312.08C249.488 4.488 239.904 0 231.624 0 168.272 0 138 79.608 128.512 120.064c-24.624 7.648-42.128 13.104-44.336 13.824-13.768 4.336-14.192 4.768-15.976 17.776-1.376 9.848-37.336 289.312-37.336 289.312l280.176 52.752 151.824-33.016S409.576 98.624 409.24 96.136c-.336-2.48-2.512-3.856-4.304-4zm-149.8-14.232c0 .952-.016 1.848-.016 2.752-15.424 4.808-32.16 10.008-48.968 15.248 9.432-36.56 27.096-54.24 42.56-60.904 3.88 9.808 6.424 23.904 6.424 42.904zm-25.264-60.816c2.768 0 5.504.928 8.144 2.76-20.312 9.592-42.064 33.792-51.264 82.088-13.432 4.176-26.552 8.272-38.704 12.048 10.768-36.856 36.32-96.896 81.824-96.896zm10.92 215.296s-16.4-8.792-36.488-8.792c-29.488 0-30.976 18.592-30.976 23.264 0 25.56 66.296 35.36 66.296 95.224 0 47.104-29.712 77.424-69.808 77.424-48.096 0-72.704-30.088-72.704-30.088l12.872-42.76s25.28 21.832 46.64 21.832c13.92 0 19.592-11.04 19.592-19.096 0-33.344-54.392-34.832-54.392-89.624 0-46.088 32.928-90.728 99.424-90.728 25.592 0 38.264 7.384 38.264 7.384l-18.72 55.96zm30.952-156.896c0-1.688.016-3.336.016-5.152 0-15.728-2.184-28.408-5.672-38.456 14.016 1.752 23.352 17.784 29.36 36.224-7.032 2.208-15.032 4.688-23.704 7.384z" fill="#95c675"/><path d="M404.936 92.136c-1.768-.168-39.52-2.968-39.52-2.968S339.176 63 336.304 60.12c-2.88-2.896-8.504-2.032-10.696-1.368-.312.088-5.72 1.776-14.672 4.536-8.768-25.336-24.216-48.616-51.408-48.616-.752 0-1.528.032-2.312.08C249.488 4.488 239.904 0 231.624 0c-63.352 0-78.984 79.608-88.472 120.064-24.624 7.648-43.52 49.752-45.752 50.456-13.752 4.336-14.176 4.768-15.968 17.784-1.384 9.84-50.568 252.672-50.568 252.672l280.176 52.752 151.824-33.016S409.576 98.624 409.24 96.136c-.336-2.48-2.512-3.856-4.304-4zm-149.8-14.232c0 .952-.016 1.848-.016 2.752-15.424 4.808-32.16 10.008-48.968 15.248 9.432-36.56 27.096-54.24 42.56-60.904 3.88 9.808 6.424 23.904 6.424 42.904zm-25.264-60.816c2.768 0 5.504.928 8.144 2.76-20.312 9.592-42.064 33.792-51.264 82.088-13.432 4.176-26.552 8.272-38.704 12.048 10.768-36.856 36.32-96.896 81.824-96.896zm10.92 215.296s-16.4-8.792-36.488-8.792c-29.488 0-30.976 18.592-30.976 23.264 0 25.56 66.296 35.36 66.296 95.224 0 47.104-29.712 77.424-69.808 77.424-48.096 0-72.704-30.088-72.704-30.088l12.872-42.76s25.28 21.832 46.64 21.832c13.92 0 19.592-11.04 19.592-19.096 0-33.344-54.392-34.832-54.392-89.624 0-46.088 32.928-90.728 99.424-90.728 25.592 0 38.264 7.384 38.264 7.384l-18.72 55.96zm30.952-156.896c0-1.688.016-3.336.016-5.152 0-15.728-2.184-28.408-5.672-38.456 14.016 1.752 23.352 17.784 29.36 36.224-7.032 2.208-15.032 4.688-23.704 7.384z" fill="#79b259"/><path d="M311.04 493.72l151.824-33.008S409.576 98.624 409.24 96.136c-.336-2.488-2.504-3.856-4.304-4-1.768-.168-39.52-2.968-39.52-2.968S339.176 63 336.304 60.12c-1.536-1.552-3.832-1.992-6-2.008-5.76 9.76-4.568 28.296-4.568 28.296L307.88 493.12l3.16.6z" fill="#55932c"/><path d="M259.528 14.68c-.752 0-1.528.032-2.312.08C249.488 4.496 239.904.008 231.624.008c-63.096 0-93.392 78.984-103 119.576l19.576-6.072c10.832-36.872 36.36-96.424 81.672-96.424 2.768 0 5.504.928 8.144 2.76-20.256 9.56-41.952 33.672-51.184 81.704l19.44-6C215.728 59.224 233.32 41.64 248.728 35c3.872 9.816 6.424 23.904 6.424 42.904 0 .864 0 1.688-.016 2.512l16.624-5.144c0-1.6.016-3.2.016-4.936 0-15.728-2.184-28.408-5.672-38.456 13.968 1.744 23.296 17.704 29.296 36.064l15.504-4.808c-8.792-25.264-24.232-48.456-51.376-48.456z" fill="#4a7a2b"/><path d="M371.752 89.648c-3.792-.296-6.344-.48-6.344-.48S339.168 63 336.296 60.12c-1.536-1.552-3.832-1.992-6-2.008-5.76 9.76-4.568 28.296-4.568 28.296L307.872 493.12l3.168.6 80.784-17.568-20.072-386.504z" fill="#4c822a"/></svg>


                          </div>
                          <span class="text-lg">Shopify</span>
                        </div>
                        <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
                          <div class="bg-green-600 h-2 rounded-full flex-grow mr-2"></div>
                          100%
                        </div>
                        <div class="flex w-3/5 md:w/12">
                          <div class="w-1/2 px-4">
                            <div class="text-right">
                              1000 Order
                            </div>
                          </div>
                          <div class="w-1/2 px-4">
                            <div class="text-right text-grey">
                              2300 Inserts
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
                        <div class="w-2/5 xl:w-1/4 px-4 flex items-center">
                          <div class="rounded-full bg-grey inline-flex mr-3">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 153" class="w-8 h-8 block"><path d="M23.759 0h208.378C245.325 0 256 10.675 256 23.863v79.541c0 13.188-10.675 23.863-23.863 23.863H157.41l10.257 25.118-45.109-25.118H23.863c-13.187 0-23.862-10.675-23.862-23.863V23.863C-.104 10.78 10.57 0 23.759 0z" fill="#9B5C8F"/><path d="M14.578 21.75c1.457-1.978 3.642-3.018 6.556-3.226 5.308-.417 8.326 2.08 9.054 7.492 3.226 21.75 6.764 40.17 10.51 55.259l22.79-43.395c2.082-3.955 4.684-6.036 7.806-6.244 4.579-.312 7.388 2.601 8.533 8.741 2.602 13.84 5.932 25.6 9.886 35.59 2.706-26.432 7.285-45.476 13.737-57.235 1.56-2.914 3.85-4.371 6.868-4.58 2.394-.207 4.579.521 6.556 2.082 1.977 1.561 3.018 3.538 3.226 5.932.104 1.873-.208 3.434-1.04 4.995-4.059 7.493-7.39 20.085-10.095 37.567-2.601 16.963-3.538 30.18-2.914 39.65.209 2.6-.208 4.89-1.248 6.868-1.25 2.289-3.122 3.538-5.516 3.746-2.706.208-5.515-1.04-8.221-3.85-9.678-9.887-17.379-24.664-22.998-44.332-6.765 13.32-11.76 23.31-14.986 29.97-6.14 11.76-11.343 17.796-15.714 18.108-2.81.208-5.203-2.186-7.284-7.18-5.307-13.633-11.031-39.962-17.17-78.986-.417-2.706.207-5.1 1.664-6.972zm223.636 16.338c-3.746-6.556-9.262-10.51-16.65-12.072-1.978-.416-3.85-.624-5.62-.624-9.99 0-18.107 5.203-24.455 15.61-5.412 8.845-8.117 18.627-8.117 29.346 0 8.013 1.665 14.881 4.995 20.605 3.746 6.556 9.262 10.51 16.65 12.071 1.977.417 3.85.625 5.62.625 10.094 0 18.211-5.203 24.455-15.61 5.411-8.95 8.117-18.732 8.117-29.45.104-8.117-1.665-14.882-4.995-20.501zm-13.112 28.826c-1.457 6.868-4.059 11.967-7.91 15.401-3.017 2.706-5.827 3.85-8.428 3.33-2.498-.52-4.58-2.705-6.14-6.764-1.25-3.226-1.873-6.452-1.873-9.47 0-2.601.208-5.203.728-7.596.937-4.267 2.706-8.43 5.515-12.384 3.435-5.1 7.077-7.18 10.823-6.452 2.498.52 4.58 2.706 6.14 6.764 1.249 3.226 1.873 6.452 1.873 9.47 0 2.706-.208 5.307-.728 7.7zm-52.033-28.826c-3.746-6.556-9.366-10.51-16.65-12.072-1.977-.416-3.85-.624-5.62-.624-9.99 0-18.107 5.203-24.455 15.61-5.411 8.845-8.117 18.627-8.117 29.346 0 8.013 1.665 14.881 4.995 20.605 3.746 6.556 9.262 10.51 16.65 12.071 1.978.417 3.85.625 5.62.625 10.094 0 18.211-5.203 24.455-15.61 5.412-8.95 8.117-18.732 8.117-29.45 0-8.117-1.665-14.882-4.995-20.501zm-13.216 28.826c-1.457 6.868-4.059 11.967-7.909 15.401-3.018 2.706-5.828 3.85-8.43 3.33-2.497-.52-4.578-2.705-6.14-6.764-1.248-3.226-1.872-6.452-1.872-9.47 0-2.601.208-5.203.728-7.596.937-4.267 2.706-8.43 5.516-12.384 3.434-5.1 7.076-7.18 10.822-6.452 2.498.52 4.58 2.706 6.14 6.764 1.25 3.226 1.873 6.452 1.873 9.47.105 2.706-.208 5.307-.728 7.7z" fill="#FFF"/></svg>

                          </div>
                          <span class="text-lg">Woo</span>
                        </div>
                        <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
                          <div class="bg-orange-600 h-2 w-2 rounded-full mr-2"></div>
                          0%
                        </div>
                        <div class="flex w-3/5 md:w/12">
                          <div class="w-1/2 px-4">
                            <div class="text-right">
                              10 Orders
                            </div>
                          </div>
                          <div class="w-1/2 px-4">
                            <div class="text-right text-grey">
                              1 Insert
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="px-6 py-4">
                        <div class="text-center text-grey">
                          Total Inserts generated &asymp; 2301
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full lg:w-1/2 px-4">
                    <div class="bg-white border-t border-b sm:rounded sm:border shadow">
                      <div class="border-b">
                        <div class="flex justify-between px-6 -mb-px">
                          <h3 class="text-blue-dark py-4 font-normal text-lg">Recent Activity</h3>
                        </div>
                      </div>
                      <div>
                        <div class="text-center px-6 py-4">
                          <div class="py-8">
                            <div class="mb-4">
                              <svg class="inline-block fill-current text-grey h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11.933 13.069s7.059-5.094 6.276-10.924a.465.465 0 0 0-.112-.268.436.436 0 0 0-.263-.115C12.137.961 7.16 8.184 7.16 8.184c-4.318-.517-4.004.344-5.974 5.076-.377.902.234 1.213.904.959l2.148-.811 2.59 2.648-.793 2.199c-.248.686.055 1.311.938.926 4.624-2.016 5.466-1.694 4.96-6.112zm1.009-5.916a1.594 1.594 0 0 1 0-2.217 1.509 1.509 0 0 1 2.166 0 1.594 1.594 0 0 1 0 2.217 1.509 1.509 0 0 1-2.166 0z"/></svg>
                            </div>
                            <p class="text-2xl text-grey-darker font-medium mb-4">No Inserts generated yet</p>
                            <p class="text-grey max-w-xs mx-auto mb-6">You've successfully linked a selling channel and can start generating inserts from your store.</p>
                            <div>
                              <button type="button" class="bg-pack_primary hover:bg-blue-dark text-white border border-pack_primary rounded px-6 py-4">Generate now</button>
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
@endsection
