<div class="p-6 text-gray-900 dark:text-gray-100">
    <h1 class="text-2xl text-gray-600 dark:text-gray-300 font-bold mb-6 underline">
        Subscribers
    </h1>

    <div class="px-8">
        <x-text-input
            type="text"
            class="rounded-lg border float-right border-gray-300 mb-4 pl-8 w-1/3"
            placeholder="Search"
            wire:model.live="search"
        />
        @if($subscribers->isEmpty())
            <div class="flex w-full bg-red-800 p-5 rounded-lg">
                <p class="text-red-500">
                    No subscribers found.
                </p>
            </div>
        @else
            <table class="w-full">
                <thead class="border-b-2 border-gray-600 text-indigo-400">
                <tr>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Verified</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($subscribers as $subscriber)
                    <tr class="text-sm text-indigo-300 border-b border-gray-400">
                        <td class="px-6 py-4">
                            {{ $subscriber->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{
                                optional($subscriber->email_verified_at)
                                    ->diffForHumans() ?? 'Never'
                            }}
                        </td>
                        <td class="px-6 py-4">
                            <x-secondary-button
                                class="!text-red-100 !bg-red-700 hover:!bg-red-900"
                                wire:click="delete({{ $subscriber->id }})"
                            >
                                A button
                            </x-secondary-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
