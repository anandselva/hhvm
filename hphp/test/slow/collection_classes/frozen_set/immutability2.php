<?hh

// Test that FS is immutable.

function main() {
  $fs = FrozenSet {1, 2, 3};
  $fs->add(2);
}

main();
