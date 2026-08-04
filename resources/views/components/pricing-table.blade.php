<div class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-brand-100">
            <thead class="bg-brand-50">
            <tr>
                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Behandeling</th>
                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Kosten</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-brand-100 text-base text-gray-700">
            @forelse($pricingTiers as $tier)
                <tr>
                    <td class="px-6 py-4">{{ $tier->name }}</td>
                    <td class="px-6 py-4">{{ $tier->formatted_price }}</td>
                </tr>
            @empty
                <tr>
                    <td class="px-6 py-4" colspan="2">Neem contact op voor de actuele tarieven.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
