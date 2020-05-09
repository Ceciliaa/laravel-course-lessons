@extends('layout')

@section('header')

    <div class="bg-gray-50" x-data="{ openPanel: 1 }">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-center text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Frequently asked questions
                </h2>
                <div class="mt-6 border-t-2 border-gray-200 pt-6">
                    <dl>
                        <div>
                            <dt class="text-lg leading-7">
                                <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 1 ? null : 1)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 1" aria-expanded="false">
                <span class="font-medium text-gray-900">
                  What's the best thing about Switzerland?
                </span>
                                    <span class="ml-6 h-7 flex items-center">
                  <svg class="h-6 w-6 transform rotate-0" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 1, 'rotate-0': !(openPanel === 1) }" x-bind-class="{ '-rotate-180': openPanel === 1, 'rotate-0': !(openPanel === 1) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" x-show="openPanel === 1" style="display: none;">
                                <p class="text-base leading-6 text-gray-500">
                                    I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                </p>
                            </dd>
                        </div>
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <div>
                                <dt class="text-lg leading-7">
                                    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 2 ? null : 2)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 2" aria-expanded="false">
                  <span class="font-medium text-gray-900">
                    How do you make holy water?
                  </span>
                                        <span class="ml-6 h-7 flex items-center">
                    <svg class="h-6 w-6 transform rotate-0" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }" x-bind-class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 2" style="display: none;">
                                    <p class="text-base leading-6 text-gray-500">
                                        You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut tempora vitae odio inventore fuga aliquam nostrum quod porro. Delectus quia facere id sequi expedita natus.
                                    </p>
                                </dd>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <div>
                                <dt class="text-lg leading-7">
                                    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 3 ? null : 3)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 3" aria-expanded="false">
                  <span class="font-medium text-gray-900">
                    What do you call someone with no body and no nose?
                  </span>
                                        <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 3, 'rotate-0': !(openPanel === 3) }" x-bind-class="{ '-rotate-180': openPanel === 3, 'rotate-0': !(openPanel === 3) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 3" style="display: none;">
                                    <p class="text-base leading-6 text-gray-500">
                                        Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, voluptas ipsa quia excepturi, quibusdam natus exercitationem sapiente tempore labore voluptatem.
                                    </p>
                                </dd>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <div>
                                <dt class="text-lg leading-7">
                                    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 4 ? null : 4)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 4" aria-expanded="false">
                  <span class="font-medium text-gray-900">
                    Why do you never see elephants hiding in trees?
                  </span>
                                        <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 4, 'rotate-0': !(openPanel === 4) }" x-bind-class="{ '-rotate-180': openPanel === 4, 'rotate-0': !(openPanel === 4) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 4" style="display: none;">
                                    <p class="text-base leading-6 text-gray-500">
                                        Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                                    </p>
                                </dd>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <div>
                                <dt class="text-lg leading-7">
                                    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 5 ? null : 5)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 5" aria-expanded="false">
                  <span class="font-medium text-gray-900">
                    Why can't you hear a pterodactyl go to the bathroom?
                  </span>
                                        <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 5, 'rotate-0': !(openPanel === 5) }" x-bind-class="{ '-rotate-180': openPanel === 5, 'rotate-0': !(openPanel === 5) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 5" style="display: none;">
                                    <p class="text-base leading-6 text-gray-500">
                                        Because the pee is silent. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quas voluptatibus ex culpa ipsum, aspernatur blanditiis fugiat ullam magnam suscipit deserunt illum natus facilis atque vero consequatur! Quisquam, debitis error.
                                    </p>
                                </dd>
                            </div>
                        </div>
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <div>
                                <dt class="text-lg leading-7">
                                    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 6 ? null : 6)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 6" aria-expanded="false">
                  <span class="font-medium text-gray-900">
                    Why did the invisible man turn down the job offer?
                  </span>
                                        <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 6, 'rotate-0': !(openPanel === 6) }" x-bind-class="{ '-rotate-180': openPanel === 6, 'rotate-0': !(openPanel === 6) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12" x-show="openPanel === 6" style="display: none;">
                                    <p class="text-base leading-6 text-gray-500">
                                        He couldn't see himself doing it. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet perspiciatis officiis corrupti tenetur. Temporibus ut voluptatibus, perferendis sed unde rerum deserunt eius.
                                    </p>
                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

@endsection
