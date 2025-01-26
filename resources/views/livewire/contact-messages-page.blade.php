<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8">Messages de contact</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($messages as $message)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $message->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $message->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $message->message }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $message->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
