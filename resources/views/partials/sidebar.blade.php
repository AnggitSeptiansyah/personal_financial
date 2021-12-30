<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{{ __('MANAGE CHECKLISTS') }}</li>
        <li>
          <a href="">
            <i class="fa fa-credit-card-alt"></i> <span>{{ __('Income')}}</span>
          </a>
        </li>
        <li>
          <a href="{{ route('income_types.index') }}">
            <i class="fa fa-plus-circle"></i> <span>{{ __('Income Types')}}</span>
          </a>
        </li>

        <li class="header">{{ __('Expenses') }}</li>
        <li>
          <a href="">
            <i class="fa fa-money"></i> <span>{{ __('Expenses')}}</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-plus"></i> <span>{{ __('Expense Types')}}</span>
          </a>
        </li>

        {{-- Pages --}}
        <li class="header">{{ __('PAGES') }}</li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>