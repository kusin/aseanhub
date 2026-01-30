<div class="row">
    <div class="col-sm-12">
        <div class="card card-info card-outline">
            <div class="card-body">
                <table class="table border-bottom">
                    <tbody>
                        <tr>
                            <td class="text-left text-muted">Status Data</td>
                            <td class="text-right text-muted">
                                <span class="badge badge-success badge-custom">
                                    {{ $judge->status_data ?? '-' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left text-muted">Last Updated</td>
                            <td class="text-right text-muted">
                                {{ $judge->updated_at?->format('Y/m/d') ?? '-' }} -
                                {{ $judge->updated_at?->format('H:i') ?? '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- card-body --}}
        </div>
        {{-- card --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}
