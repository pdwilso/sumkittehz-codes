// Node
/// class Element - Element Abstract Class
class Element {
  // Attributes
public:
  /// Collection of class Attribute
  Collection attributes;
protected:
  /// Tag Name string for HTML element.
  String tagName;
  // Operations
public:
  /// returns the HTML element as an HTML output string.
  virtual String outputString () = 0;
private:
  /// This is the name of the derived element.
  /// @param _name		(???) This parameter is required and has no default value.
  void setTagName ();
protected:
  /// Returns the tag name for the inherited HTML Element
  string getTagName ();
  void addAttribute (string name, string value);
  /// Return the attribute list for this Element as a string containing name="value" 
  /// @param name		(???) Return attribute named 'name' - if 'name' == '*' return an array of name/value 
  string getAttributeString ();
  /// Return the number attrubute/value pairs in the attributes collection.
  int getAttributeCount ();
};

