<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{ route('dashboard.index') }}">
            <i class="fa fa-dashboard"></i> <span>{{ __('Dashboard')}}</span>
          </a>
        </li>
        <li class="header">{{ __('Income') }}</li>
        <li>
          <a href="{{ route('incomes.index') }}">
            <i class="fa fa-credit-card-alt"></i> <span>{{ __('Pendapatan')}}</span>
          </a>
        </li>
        <li>
          <a href="{{ route('income_types.index') }}">
            <i class="fa fa-plus-circle"></i> <span>{{ __('Jenis Pendapatan')}}</span>
          </a>
        </li>

        <li class="header">{{ __('Expenses') }}</li>
        <li>
          <a href="{{ route('expenses.index') }}">
            <i class="fa fa-money"></i> <span>{{ __('Pengeluaran')}}</span>
          </a>
        </li>
        <li>
          <a href="{{ route('expense_types.index') }}">
            <i class="fa fa-plus"></i> <span>{{ __('Jenis Pengeluaran')}}</span>
          </a>
        </li>
        <li class="header">{{ __('Hutang & Piutang') }}</li>
        <li>
          <a href="{{ route('debts.index') }}">
            <i class="fa fa-money"></i> <span>{{ __('Hutang')}}</span>
          </a>
        </li>
        <li>
          <a href="{{ route('receivables.index') }}">
            <i class="fa fa-plus"></i> <span>{{ __('Piutang')}}</span>
          </a>
        </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>