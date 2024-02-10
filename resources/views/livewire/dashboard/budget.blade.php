<main class="container mx-auto py-6">
    @empty($budgets)
        <x-dashboard.budget-empty />
    @else
        <p>not empty</p>
    @endempty
</main>
