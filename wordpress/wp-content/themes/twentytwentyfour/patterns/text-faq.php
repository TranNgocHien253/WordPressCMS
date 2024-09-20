rings): # -> None:
        """Register a handler instance by name with esc_strings."""
        ...
    
    def unregister_handler(self, name, handler, esc_strings): # -> None:
        """Unregister a handler instance by name with esc_strings."""
        ...
    
    def get_handler_by_name(self, name):
        """Get a handler by its name."""
        ...
    
    def get_handler_by_esc(self, esc_str):
        """Get a handler by its escape string."""
        ...
    
    def prefilter_line_info(self, line_info):
        """Prefilter a line that has been converted to a LineInfo object.

        This implements the checker/handler part of the prefilter pipe.
        """
        ...
    
    def find_handler(self, line_info):
        """Find a handler for the line_info by trying checkers."""
        ...
    
    def transform_line(self, line, continue_prompt):
        """Calls the enabled transformers in order of increasing priority."""
        ...
    
    def prefilter_line(self, line, continue_prompt=...):
        """Prefilter a single input line as text.

        This method prefilters a single line of text by calling the
        transformers and then the checkers/handlers.
        """
        ...
    
    def prefilter_lines(self, lines, continue_prompt=...):
        """Prefilter multiple input lines of text.

        This is the main entry point for prefiltering multiple lines of
        input.  This simply calls :meth:`prefilter_line` for each line of
        input.

        This covers cases where there are multiple lines in the user entry,
        which is the case when the user goes back to a multiline history
        entry and presses enter.
        """
        ...
    


class PrefilterTransformer(Configurable):
    """Transform a line of user input."""
    priority = Integer(100).tag(config=True)
    shell = ...
    prefilter_manager = ...
    enabled = ...
    def __init__(self, shell=..., prefilter_manager=..., **kwargs) -> None:
        ...
    
    def transform(self, line, continue_prompt): # -> None:
        """Transform a line, returning the new one."""
        ...
    
    def __repr__(self):
        ...
    


class PrefilterChecker(Configurable):
    """Inspect an input line and return a handler for that line."""
    priority = Integer(100).tag(config=True)
    shell = ...
    prefilter_manager = ...
    enabled = ...
    def __init__(self, shell=..., prefilter_manager=..., **kwargs) -> None:
        ...
    
    def check(self, line_info): # -> None:
        """Inspect line_info and return a handler instance or None."""
        ...
    
    def __repr__(self):
        ...
    


class EmacsChecker(PrefilterChecker):
    priority = Integer(100).tag(config=True)
    enabled = ...
    def check(self, line_info): # -> None:
        "Emacs ipython-mode tags certain input lines."
        ...
    


class MacroChecker(PrefilterChecker):
    priority = Integer(250).tag(config=True)
    def check(self, line_info): # -> None:
        ...
    


class IPyAutocallChecker(PrefilterChecker):
    priority = Integer(300).tag(config=True)
    def check(self, line_info): # -> None:
        "Instances of IPyAutocall in user_ns get autocalled immediately"
        ...
    


class AssignmentChecker(PrefilterChecker):
    priority = Integer(600).tag(config=True)
    def check(self, line_info): # -> None:
        """Check to see if user is assigning to a var for the first time, in
        which case we want to avoid any sort of automagic / autocall games.

        This allows users to assign to either alias or magic names true python
        variables (the magic/alias systems always take second seat to true
        python code).  E.g. ls='hi', or ls,that=1,2"""
        ...
    


class AutoMagicChecker(PrefilterChecker):
    priority = Integer(700).tag(config=True)
    def check(self, line_info): # -> None:
        """If the ifun is magic, and automagic is on, run it.  Note: normal,
        non-auto magic would already have been triggered via '%' in
        check_esc_chars. This just checks for automagic.  Also, before
        triggering the magic handler, make sure that there is nothing in the
        user namespace which could shadow it."""
        ...
    


class PythonOpsChecker(PrefilterChecker):
    priority = Integer(900).tag(config=True)
    def check(self, line_info): # -> None:
        """If the 'rest' of the line begins with a function call or pretty much
        any python operator, we should simply execute the line (regardless of
        whether or not there's a possible autocall expansion).  This avoids
        spurious (and very confusing) geattr() accesses."""
        ...
    


class AutocallChecker(PrefilterChecker):
    priority = Integer(1000).tag(config=True)
    function_name_regexp = ...
    exclude_regexp = ...
    def check(self, line_info): # -> None:
        "Check if the initial word/function is callable and autocall is on."
        ...
    


class PrefilterHandler(Configurable):
    handler_name = ...
    esc_strings = ...
    shell = ...
    prefilter_manager = ...
    def __init__(self, shell=..., prefilter_manager=..., **kwargs) -> None:
        ...
    
    def handle(self, line_info):
        """Handle normal input lines. Use as a template for handlers."""
        ...
    
    def __str__(self) -> str:
        ...
    


class MacroHandler(PrefilterHandler):
    handler_name = ...
    def handle(self, line_info):
        ...
    


class MagicHandler(PrefilterHandler):
    handler_name = ...
    esc_strings = ...
    def handle(self, line_info):
        """Execute magic functions."""
        ...
    


class AutoHandler(PrefilterHandler):
    handler_name = ...
    esc_strings = ...
    def handle(self, line_info):
        """Handle lines which can be auto-executed, quoting if requested."""
        ...
    


class EmacsHandler(PrefilterHandler):
    handler_name = ...
    esc_strings = ...
    def handle(self, line_info):
        """Handle input lines marked by python-mode."""
        ...
    


_default_checkers = ...
_default_handlers = ...
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  