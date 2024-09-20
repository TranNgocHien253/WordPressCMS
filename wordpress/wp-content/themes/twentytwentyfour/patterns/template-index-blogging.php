from typing import Any

from django.db.backends.base.features import (
    BaseDatabaseFeatures as BaseDatabaseFeatures,
)

class DatabaseFeatures(BaseDatabaseFeatures):
    empty_fetchmany_value: Any = ...
    allows_group_by_pk: bool = ...
    related_fields_match_type: bool = ...
    allow_sliced_subqueries_with_in: bool = ...
    has_select_for_update: bool = ...
    supports_forward_references: bool = ...
    supports_regex_backreferencing: bool = ...
    supports_date_lookup_using_string: bool = ...
    can_introspect_autofield: bool = ...
    can_introspect_binary_field: bool = ...
    can_introspect_duration_field: bool = ...
    can_introspect_small_integer_field: bool = ...
    can_introspect_positive_integer_field: bool = ...
    introspected_boolean_field_type: str = ...
    supports_index_column_ordering: bool = ...
    supports_timezones: bool = ...
    requires_explicit_null_ordering_when_gro